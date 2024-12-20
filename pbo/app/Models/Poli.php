<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poli extends Model
{
    use HasFactory;

    protected $table = 'polis';

    protected $fillable = [
        'kode_poli',
        'nama_poli',
        'status',
    ];

    public function pendaftarans(){
        $this->hasMany(Pendaftaran::class);
    }
}
