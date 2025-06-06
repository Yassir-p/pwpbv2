<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        "nm_brg",
        "hrg_brg",
        "stok",
        "jenis",
        "gambar",
    ];
}
