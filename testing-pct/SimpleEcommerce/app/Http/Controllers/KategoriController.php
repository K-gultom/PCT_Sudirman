<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Models\produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = kategori::all();
        return view('Kategori.kategori', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Kategori.addKategori');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $r)
    {
        $r->validate([
            "name" => 'required|min:3|max:50',
        ]);

        $new = new kategori();
        $new -> name = $r -> name;
        $new -> user_id = Auth::user()->id;
        $new -> save();

        return redirect('/kategori')->with('message', 'Kategori baru ' .$r->name. ' berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = kategori::find($id);
        return view('Kategori.editKategori', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $r, string $id)
    {
        $r->validate([
            "name" => 'required|min:3|max:50',
        ]);

        $new = kategori::find($id);
        $new -> name = $r -> name;
        $new -> user_id = Auth::user()->id;
        $new -> save();

        return redirect('/kategori')->with('message', 'Kategori '  .$r->name. ' berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Mengambil data kategori berdasarkan ID
        $data = Kategori::findOrFail($id);

        // Mengambil semua produk yang memiliki category_id yang sesuai dengan kategori yang akan dihapus
        $produk = Produk::where('category_id', $id)->get();

        // Menghapus semua produk yang terkait
        foreach ($produk as $item) {
            // Menghapus file foto produk jika ada
            if ($item->photo && file_exists(public_path('assets/produkImages/' . $item->photo))) {
                unlink(public_path('assets/produkImages/' . $item->photo));
            }
            // Menghapus produk dari database
            $item->delete();
        }

        // Menghapus data kategori dari database
        $data->delete();

        // Redirect dengan pesan sukses
        return redirect()->back()->with('message_delete', 'Kategori ' . $data->name . ' berhasil dihapus beserta produk yang terkait');
    }

}
