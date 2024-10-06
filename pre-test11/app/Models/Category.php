<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function products() {
        return $this->hasMany(Product::class);
    }
    // Relasi antar tabel sudah diterapkan di controller dengan menggunakan Eloquent Relationships. Pada contoh sebelumnya, relasi antara Product dan Category sudah ada dengan relasi belongsTo.
}
