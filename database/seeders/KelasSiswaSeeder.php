<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kelas;
use App\Models\Siswa;

class KelasSiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get all kelas and siswa
        $kelas = Kelas::all();
        $siswa = Siswa::all();
        
        if ($kelas->count() > 0 && $siswa->count() > 0) {
            // Assign siswa to kelas
            foreach ($kelas as $index => $kelasItem) {
                // Get 3-5 siswa for each kelas (or all if less than 5)
                $siswaForKelas = $siswa->slice($index * 3, rand(3, 5));
                
                foreach ($siswaForKelas as $siswaItem) {
                    // Check if kelas is not full
                    if ($kelasItem->siswa->count() < $kelasItem->kapasitas) {
                        $kelasItem->siswa()->attach($siswaItem->id);
                    }
                }
            }
        }
    }
}
