<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MataPelajaran;
use App\Models\Guru;

class MataPelajaranTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $guru = Guru::first();
        
        if ($guru) {
            MataPelajaran::create([
                'kode' => 'ARB-001',
                'nama_pelajaran' => 'Huruf Hijaiyah',
                'guru_id' => $guru->id,
                'deskripsi' => 'Mata pelajaran dasar untuk mempelajari huruf-huruf dalam bahasa Arab',
                'status' => 'Aktif'
            ]);

            MataPelajaran::create([
                'kode' => 'ARB-002',
                'nama_pelajaran' => 'Tajwid',
                'guru_id' => $guru->id,
                'deskripsi' => 'Mata pelajaran tentang kaidah membaca Al-Quran dengan benar',
                'status' => 'Aktif'
            ]);

            MataPelajaran::create([
                'kode' => 'ARB-003',
                'nama_pelajaran' => 'Nahwu',
                'guru_id' => $guru->id,
                'deskripsi' => 'Mata pelajaran tata bahasa Arab',
                'status' => 'Aktif'
            ]);

            MataPelajaran::create([
                'kode' => 'ARB-004',
                'nama_pelajaran' => 'Shorof',
                'guru_id' => $guru->id,
                'deskripsi' => 'Mata pelajaran tentang perubahan kata dalam bahasa Arab',
                'status' => 'Aktif'
            ]);

            MataPelajaran::create([
                'kode' => 'ARB-005',
                'nama_pelajaran' => 'Muhadatsah',
                'guru_id' => $guru->id,
                'deskripsi' => 'Mata pelajaran percakapan bahasa Arab',
                'status' => 'Aktif'
            ]);
        }
    }
}
