$getSuplier = suplier::count();
$totalPelanggan = pelanggan::count();
$getStok = stok::count();
$totalPendapatam = barangKeluar::sum('sub_total');
return view('Dashboard.dashboard', compact(
    'getSuplier',
    'totalPelanggan',
    'getStok',
    'totalPendapatam',
));