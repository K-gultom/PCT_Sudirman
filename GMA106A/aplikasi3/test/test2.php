use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;




$faker = Faker::create();
        $data = [];

        for ($i = 0; $i < 20; $i++) {
            $data[] = [
                'kode_barang' => strtoupper($faker->lexify('???').$faker->unique()->numerify('###')),
                'nama_barang' => $faker->words(12, true),
                'harga' => $faker->numberBetween(10000, 1000000),
                'stok' => $faker->numberBetween(1, 200),
                'suplier_id' => $faker->numberBetween(1, 5),
                'cabang' => 'Palembang',
            ];
        }

        DB::table('stoks')->insert($data);
        