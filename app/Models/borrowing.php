<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class borrowing extends Model
{
    use HasFactory;

    protected $table = 'borrowings';

    protected $fillable = ['tanggal_peminjaman','tanggal_pengembalian','jumlah'];
}
