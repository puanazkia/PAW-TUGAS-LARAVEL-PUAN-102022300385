<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produks'; // atau 'produk' tergantung nama tabel kamu

    protected $fillable = ['nama', 'stok', 'harga'];
}
