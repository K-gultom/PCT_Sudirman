        $request->validate([
            'tgl_faktur' => 'required',
            'tgl_jatuh_tempo' => 'required',
            'pelanggan_id' => 'required',
            'jenis_pembayaran' => 'required',
        ], [
            'tgl_faktur.required' => 'Data Wajib diisi',
            'tgl_jatuh_tempo.required' => 'Data Wajib diisi',
            'pelanggan_id.required' => 'Data Wajib diisi',
            'jenis_pembayaran.required' => 'Data Wajib diisi',
        ]);

        $kode_transaksi = $request->kode_transaksi;
        $tgl_faktur = $request->tgl_faktur;
        $tgl_jatuh_tempo = $request->tgl_jatuh_tempo;
        $pelanggan_id = $request->pelanggan_id;

        $getnamaPelanggan = pelanggan::find($pelanggan_id);
        $namaPelanggan = $getnamaPelanggan->nama_pelanggan;
        $jenis_pembayaran = $request->jenis_pembayaran;

        $getBarang = stok::all();

        // dd($kode_transaksi);
        return view('Transaksi.transaksi', 
        compact(
            'kode_transaksi',
            'tgl_faktur',
            'tgl_jatuh_tempo',
            'pelanggan_id',
            'namaPelanggan',
            'jenis_pembayaran',
            'getBarang',
        ));