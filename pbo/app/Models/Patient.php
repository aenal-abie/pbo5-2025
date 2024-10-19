<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'patients';

    // Primary key untuk tabel patients
    protected $primaryKey = 'idPasien';

    // Kolom yang bisa diisi secara massal
    protected $fillable = [
        'namaPasien',
        'jk',
        'tglLahir',
        'umur',
        'alamat',
        'noTelp',
        'status',
        'pekerjaan'
    ];

    // Nonaktifkan timestamps jika tidak digunakan
    public $timestamps = true;
}
