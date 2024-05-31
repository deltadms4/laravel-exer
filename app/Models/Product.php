<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $guarded = false;

    public function category()
    {
        return $this->belongsTo(Category::class, 'parent_id', 'id');
    }

    public function id()
    {
        return $this->hasOne(Product::class, 'id', 'id');
    }
}
