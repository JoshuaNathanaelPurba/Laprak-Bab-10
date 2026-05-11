<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    // Tambahkan baris ini untuk mengizinkan kolom diisi secara massal
    protected $fillable = ['judul', 'penulis', 'tahun'];
}