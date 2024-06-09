<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gitar extends Model
{
    use HasFactory;
    protected $table = "gitar";
    protected $fillable = ["merek_gitar", "model_gitar", "harga_gitar", "stok_gitar"];
}
