<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'description','url'
    ];
    
    /**
     * Get  products for the Category.
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
