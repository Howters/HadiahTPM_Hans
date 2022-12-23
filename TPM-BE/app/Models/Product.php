<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'NamaMakanan',
        'AsalMakanan',
        'TanggalExpired',
        'JamBuka',
        'JamTutup',
        'Kuantitas',
        'Image',
        'category_id'

    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
