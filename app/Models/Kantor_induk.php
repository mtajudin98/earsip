<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kantor_induk extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_induk','nama_induk','telp','alamat'
    ];
}
