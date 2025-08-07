<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Guru;

class GuruTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $guru = [
            [
                'nama_lengkap' => 'Dr. Ahmad Fauzi, M.Pd',
                'nip' => '198501012010011001',
                'nuptk' => '1234567890123456',
                'jenis_kelamin' => 'Laki-laki',
                'tempat_lahir' => 'Jakarta',
                'tanggal_lahir' => '1985-01-01',
                'alamat' => 'Jl. Sudirman No. 123, Jakarta Pusat',
                'no_telepon' => '081234567890',
                'email' => 'ahmad.fauzi@email.com',
                'pendidikan_terakhir' => 'S2',
                'foto' => null
            ],
            [
                'nama_lengkap' => 'Siti Nurhaliza, S.Pd',
                'nip' => '198607152010012002',
                'nuptk' => '1234567890123457',
                'jenis_kelamin' => 'Perempuan',
                'tempat_lahir' => 'Bandung',
                'tanggal_lahir' => '1986-07-15',
                'alamat' => 'Jl. Asia Afrika No. 45, Bandung',
                'no_telepon' => '081234567891',
                'email' => 'siti.nurhaliza@email.com',
                'pendidikan_terakhir' => 'S1',
                'foto' => null
            ],
            [
                'nama_lengkap' => 'Muhammad Rizki, M.Pd',
                'nip' => '198301102010011003',
                'nuptk' => '1234567890123458',
                'jenis_kelamin' => 'Laki-laki',
                'tempat_lahir' => 'Surabaya',
                'tanggal_lahir' => '1983-01-10',
                'alamat' => 'Jl. Tunjungan No. 67, Surabaya',
                'no_telepon' => '081234567892',
                'email' => 'muhammad.rizki@email.com',
                'pendidikan_terakhir' => 'S2',
                'foto' => null
            ],
            [
                'nama_lengkap' => 'Nurul Hidayah, S.Pd',
                'nip' => '198811052010012004',
                'nuptk' => '1234567890123459',
                'jenis_kelamin' => 'Perempuan',
                'tempat_lahir' => 'Yogyakarta',
                'tanggal_lahir' => '1988-11-05',
                'alamat' => 'Jl. Malioboro No. 89, Yogyakarta',
                'no_telepon' => '081234567893',
                'email' => 'nurul.hidayah@email.com',
                'pendidikan_terakhir' => 'S1',
                'foto' => null
            ],
            [
                'nama_lengkap' => 'Abdul Rahman, M.Pd',
                'nip' => '198505182010011005',
                'nuptk' => '1234567890123460',
                'jenis_kelamin' => 'Laki-laki',
                'tempat_lahir' => 'Medan',
                'tanggal_lahir' => '1985-05-18',
                'alamat' => 'Jl. Merdeka No. 12, Medan',
                'no_telepon' => '081234567894',
                'email' => 'abdul.rahman@email.com',
                'pendidikan_terakhir' => 'S2',
                'foto' => null
            ]
        ];

        foreach ($guru as $data) {
            Guru::create($data);
        }
    }
}
