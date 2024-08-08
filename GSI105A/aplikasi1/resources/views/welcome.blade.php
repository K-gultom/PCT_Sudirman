<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous">
    </head>
    <body>

        <div class="row">
            <div class="col-8 offset-2 mt-4">
                <div class="card">

                    <div class="card-header">
                        <div class="d-flex">
                            <div class="w-100 pt-1">
                                <strong>Form</strong> Hitung Nilai
                            </div>
                            <div class="w-100 pt-1 text-end">
                                <a href="" class="btn btn-warning btn-sm">Refresh</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="" method="post">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <mb class="4">
                                        <label for="nilaiHarian">Masukkan Nilai Harian</label>
                                        <input type="text" name="nilaiHarian" id="" class="form-control">
                                    </mb>
                                </div>
                                <div class="col">
                                    <mb class="4">
                                        <label for="nilaiUTS">Masukkan Nilai UTS</label>
                                        <input type="text" name="nilaiUTS" id="" class="form-control">
                                    </mb>
                                </div>
                            </div>
                            <div class="container-fluid text-end mt-3">
                                <button type="submit" class="btn btn-primary btn-sm">Hitung</button>
                                <button type="reset" class="btn btn-info btn-sm">Clear</button>
                            </div>
                        </form>

                        <div class="container-fluid mt-4">
                            info:  <br>
                            nilai < 60 tidak lulus, <br>
                            nilai >= 60 hingga <= 75 Predikat C, <br>
                            nilai >= 76 hingga <= 87 Predikat B, <br>
                            nilai >= 88 hingga <= 100 Predikat A <br>

                            <br><br>
                            <h4>Nilai Harian: {{ $nilaiHarian }}</h4>
                            <h4>Nilai UTS: {{ $nilaiUTS }}</h4>
                            <h4>Nilai Rata-Rata: {{ $nilaiRata }}</h4>
                            <h4>Hasil Predikat : {{ $hasilNilai }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    </body>
</html>