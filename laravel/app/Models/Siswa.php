<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    // Init Table
    protected $table = 'siswa';

    // Primary Key
    protected $primaryKey = 'nis';
    public $incrementing = false;
    protected $keyType = 'string';

    // timestamp
    public $timestamps = false;
    protected $fillable = [
        'nis',
        'name',
        'jk',
        'alamat',
        'tmp_lahir',
        'tgl_lahir',
        'telepon',
        'id_jurusan',
        'nilai'
    ];
}
