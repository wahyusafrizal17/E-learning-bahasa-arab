<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kelas;
use App\Models\Guru;

class KelasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get first 3 gurus for sample data
        $gurus = Guru::take(3)->get();
        
        if ($gurus->count() > 0) {
            $kelas = [
                [
                    'nama_kelas' => 'Kelas Bahasa Arab Dasar',
                    'kode_kelas' => 'ARB-001',
                    'kapasitas' => 25,
                    'tahun_ajaran' => '2024/2025',
                    'semester' => 'Ganjil',
                    'guru_id' => $gurus[0]->id,
                    'deskripsi' => 'Kelas untuk pemula dalam belajar bahasa Arab',
                    'status' => 'Aktif'
                ],
                [
                    'nama_kelas' => 'Kelas Bahasa Arab Menengah',
                    'kode_kelas' => 'ARB-002',
                    'kapasitas' => 20,
                    'tahun_ajaran' => '2024/2025',
                    'semester' => 'Ganjil',
                    'guru_id' => $gurus->count() > 1 ? $gurus[1]->id : $gurus[0]->id,
                    'deskripsi' => 'Kelas untuk tingkat menengah dalam belajar bahasa Arab',
                    'status' => 'Aktif'
                ],
                [
                    'nama_kelas' => 'Kelas Bahasa Arab Lanjutan',
                    'kode_kelas' => 'ARB-003',
                    'kapasitas' => 15,
                    'tahun_ajaran' => '2024/2025',
                    'semester' => 'Ganjil',
                    'guru_id' => $gurus->count() > 2 ? $gurus[2]->id : $gurus[0]->id,
                    'deskripsi' => 'Kelas untuk tingkat lanjutan dalam belajar bahasa Arab',
                    'status' => 'Aktif'
                ],
                [
                    'nama_kelas' => 'Kelas Bahasa Arab Anak-anak',
                    'kode_kelas' => 'ARB-004',
                    'kapasitas' => 30,
                    'tahun_ajaran' => '2024/2025',
                    'semester' => 'Genap',
                    'guru_id' => $gurus[0]->id,
                    'deskripsi' => 'Kelas khusus untuk anak-anak dalam belajar bahasa Arab',
                    'status' => 'Aktif'
                ],
                [
                    'nama_kelas' => 'Kelas Bahasa Arab Dewasa',
                    'kode_kelas' => 'ARB-005',
                    'kapasitas' => 18,
                    'tahun_ajaran' => '2024/2025',
                    'semester' => 'Genap',
                    'guru_id' => $gurus->count() > 1 ? $gurus[1]->id : $gurus[0]->id,
                    'deskripsi' => 'Kelas khusus untuk dewasa dalam belajar bahasa Arab',
                    'status' => 'Tidak Aktif'
                ]
            ];

            foreach ($kelas as $data) {
                Kelas::create($data);
            }
        }
    }
}
