<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;

class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswa = [
            [
                'nama_lengkap' => 'Ahmad Fadillah',
                'nis' => '2024001',
                'nisn' => '1234567890',
                'jenis_kelamin' => 'Laki-laki',
                'tempat_lahir' => 'Jakarta',
                'tanggal_lahir' => '2008-03-15',
                'alamat' => 'Jl. Sudirman No. 123, Jakarta Pusat',
                'no_telepon' => '081234567890',
                'email' => 'ahmad.fadillah@email.com',
                'foto' => null
            ],
            [
                'nama_lengkap' => 'Siti Nurhaliza',
                'nis' => '2024002',
                'nisn' => '1234567891',
                'jenis_kelamin' => 'Perempuan',
                'tempat_lahir' => 'Bandung',
                'tanggal_lahir' => '2008-07-22',
                'alamat' => 'Jl. Asia Afrika No. 45, Bandung',
                'no_telepon' => '081234567891',
                'email' => 'siti.nurhaliza@email.com',
                'foto' => null
            ],
            [
                'nama_lengkap' => 'Muhammad Rizki',
                'nis' => '2024003',
                'nisn' => '1234567892',
                'jenis_kelamin' => 'Laki-laki',
                'tempat_lahir' => 'Surabaya',
                'tanggal_lahir' => '2008-01-10',
                'alamat' => 'Jl. Tunjungan No. 67, Surabaya',
                'no_telepon' => '081234567892',
                'email' => 'muhammad.rizki@email.com',
                'foto' => null
            ],
            [
                'nama_lengkap' => 'Nurul Hidayah',
                'nis' => '2024004',
                'nisn' => '1234567893',
                'jenis_kelamin' => 'Perempuan',
                'tempat_lahir' => 'Yogyakarta',
                'tanggal_lahir' => '2008-11-05',
                'alamat' => 'Jl. Malioboro No. 89, Yogyakarta',
                'no_telepon' => '081234567893',
                'email' => 'nurul.hidayah@email.com',
                'foto' => null
            ],
            [
                'nama_lengkap' => 'Abdul Rahman',
                'nis' => '2024005',
                'nisn' => '1234567894',
                'jenis_kelamin' => 'Laki-laki',
                'tempat_lahir' => 'Medan',
                'tanggal_lahir' => '2008-05-18',
                'alamat' => 'Jl. Merdeka No. 12, Medan',
                'no_telepon' => '081234567894',
                'email' => 'abdul.rahman@email.com',
                'foto' => null
            ]
        ];

        foreach ($siswa as $data) {
            Siswa::create($data);
        }
    }
}
