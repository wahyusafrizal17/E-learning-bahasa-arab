<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'guru';

    protected $fillable = [
        'nama_lengkap',
        'nip',
        'nuptk',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'no_telepon',
        'email',
        'bidang_studi',
        'pendidikan_terakhir',
        'foto'
    ];

    /**
     * Get the kelas for the guru.
     */
    public function kelas()
    {
        return $this->hasMany(Kelas::class);
    }
} 