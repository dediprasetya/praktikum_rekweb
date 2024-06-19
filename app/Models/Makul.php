<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Makul extends Model
{
    use HasFactory;

    public $table = "makul";
    protected $primaryKey = "kodematkul";
    public $incrementing = false;
    protected $keyType = "string";
    public $fillable = ['kodematkul', 'nama_matakuliah', 'semester', 'dosen_pengampu'];
}
