<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = ['name', 'cost', 'price', 'quantity', 'created_at', 'updated_at', 'status'];

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
}
