<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;

    protected $table = 'materi';

    protected $fillable = [
        'nama_materi', 'materi', 'banner', 'deskripsi', 'tingkat_kesulitan',
        'kategori', 'kelas_id', 'urutan', 'status'
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}
