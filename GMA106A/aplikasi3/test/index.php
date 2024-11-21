
// Start a query on the BarangMasuk model with related models
$query = barangKeluar::with('getUser','getPelanggan', 'getStok');
// Apply date range filter if both dates are provided
if ($request->filled('tanggal_awal') && $request->filled('tanggal_akhir')) {
    $query->whereBetween('tgl_buat', [$request->tanggal_awal, $request->tanggal_akhir]);
}
 
// Order the results by tanggal_faktur in ascending order
$query->orderBy('created_at', 'desc');
 
// Paginate the results, e.g., 10 items per page
$getBarangKeluar = $query->paginate(15);

getTotalPendapatan = barangKeluar::sum('sub_total');

/ dd($getTotalPendapatan);
eturn view('Barang.BarangKeluar.barangKeluar', compact('getBarangKeluar', 'getTotalPendapatan'));