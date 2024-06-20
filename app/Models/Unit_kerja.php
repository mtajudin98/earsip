<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit_kerja extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_unit','nama_unit','telp','alamat','kode_induk'
    ];
}
