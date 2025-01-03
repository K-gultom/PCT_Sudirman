
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;


$faker = Faker::create();
        $data = [];

        for ($i = 0; $i < 5; $i++) {
            $nama_suplier = 'PT. ' . $faker->company;
            $data[] = [
                'nama_suplier' => $nama_suplier,
                'alamat' => $faker->address,
                'telp' => $faker->numerify($faker->randomElement(['08##########', '08###########', '08############'])),
                'email' => 'admin.' . strtolower(str_replace(' ', '_', $nama_suplier)) . '@gmail.com',
                'tgl_terdaftar' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'status' => 'Aktif',
            ];
        }

        DB::table('supliers')->insert($data);