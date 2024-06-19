<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    public $table = "dosen";
    protected $primaryKey = "nidn";
    public $incrementing = false;
    protected $keyType = "string";
    public $fillable = ['nidn', 'nama', 'umur', 'alamat', 'kota', 'fakultas', 'matakuliah'];
}
