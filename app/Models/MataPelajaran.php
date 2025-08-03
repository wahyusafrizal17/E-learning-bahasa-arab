<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    use HasFactory;

    protected $table = 'mata_pelajaran';
    
    protected $fillable = [
        'kode',
        'nama_pelajaran',
        'guru_id',
        'deskripsi',
        'status'
    ];

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }
}
