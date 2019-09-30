<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'nama_produk', 'jenis_id', 'deskripsi', 'hrg_jual'
    ];
}
