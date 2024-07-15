<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class todoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Todo.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        $req->validate([
            'todo' => 'required',
            'description' => 'required',
            'date' => 'required',
        ]);

        $save = new todo();
        $save->user_id = Auth::user()->id;
        $save->todo = $req->todo;
        $save->description = $req->description;
        $save->date = $req->date;
        $save -> save();

        return redirect('/home')->with('message', 'Todo ' .$req->todo. ' Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $lihatData = todo::find($id);
        return view('Todo.lihatData', compact('lihatData'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $getData = todo::find($id);

        return view('Todo.edit', compact('getData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, string $id)
    {
        $req->validate([
            'todo' => 'required',
            'description' => 'required',
            'date' => 'required',
        ]);

        $save = todo::find($id);
        $save->user_id = Auth::user()->id;
        $save->todo = $req->todo;
        $save->description = $req->description;
        $save->date = $req->date;
        $save -> save();

        return redirect('/home')->with('message', 'Todo ' .$req->todo. ' Berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dataDelete = todo::find($id);
        $dataDelete->delete();
        
        return redirect('/home')->with('message', 'Todo ' .$dataDelete->todo. ' Berhasil dihapus');
    }
}
