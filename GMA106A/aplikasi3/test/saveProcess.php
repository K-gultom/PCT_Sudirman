$request->validate([
    'kode_transaksi' => 'required',
    'tgl_faktur' => 'required',
    'tgl_jatuh_tempo' => 'required',
    'pelanggan_id' => 'required',
    'jenis_pembayaran' => 'required',
    'barang_id' => 'required',
    'jumlah_beli' => 'required',
    'harga_jual' => 'required',
]);

$save = new barangKeluar();
$save-> kode_transaksi = $request->kode_transaksi;
$save-> tgl_faktur = $request->tgl_faktur;
$save-> tgl_jatuh_tempo = $request->tgl_jatuh_tempo;
$save-> pelanggan_id = $request->pelanggan_id;
$save-> jenis_pembayaran = $request->jenis_pembayaran;
$save-> barang_id = $request->barang_id;
$save-> jumlah_beli = $request->jumlah_beli;
    // Update jumlah stok didalam data stok barang
    $getStokData = stok::find($request->barang_id);
        $getSumStokNow = $getStokData->stok;
    $getStokData->stok = $getSumStokNow - $request->jumlah_beli;
    $getStokData->save();
$save-> harga_jual = $request->harga_jual;

$diskon = $request->diskon;
$nilaiDiskon = $diskon  / 100;
if ($diskon) {
    $save-> diskon = $request->diskon;
    $hitung = $request->jumlah_beli * $request->harga_jual;
    $totalDiskon = $hitung * $nilaiDiskon;
    $subTotal = $hitung - $totalDiskon;
    $save-> sub_total = $subTotal; //save for sub total to database
} else {
    $hitung = $request->jumlah_beli * $request->harga_jual;
    $save-> sub_total = $hitung; //save for sub total to database
}
$save-> user_id = Auth::user()->id;
$save-> tgl_buat = $request->tgl_faktur;
$save-> cabang = $request->cabang;
// dd($kode_transaksi);
$save->save()

return redirect('/barang-keluar')->with('message', 'Berhasil input barang keluar');