<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';

    protected $fillable = [
        'nama_kelas',
        'kode_kelas',
        'kapasitas',
        'tahun_ajaran',
        'semester',
        'guru_id',
        'deskripsi',
        'status'
    ];

    /**
     * Get the guru that owns the kelas.
     */
    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }

    /**
     * Get the siswa for the kelas.
     */
    public function siswa()
    {
        return $this->belongsToMany(Siswa::class, 'kelas_siswa', 'kelas_id', 'siswa_id');
    }

    public function materi()
    {
        return $this->hasMany(Materi::class)->orderBy('urutan');
    }
} 