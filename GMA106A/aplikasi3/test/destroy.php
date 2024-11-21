$delete = barangKeluar::find($id);
$getIdBK = $delete->barang_id;
$getJumlahBK = $delete->jumlah_beli;
    
    $update = stok::find($getIdBK);
    $getStok = $update->stok;
    $jumlahBaru = $getStok + $getJumlahBK;
    $update->stok = $jumlahBaru;
    // dd($update);
    $update->save();
    
$delete->delete();
return redirect('/barang-keluar')->with('message', 'Data Berhasil diHapus!!!');