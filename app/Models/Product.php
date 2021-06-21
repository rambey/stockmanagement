<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'productID', 'name','productCode','quantity', 'price','model' ,'category_id','brand_id'
    ];

    /**
     * Get the category that owns the Product.
    */


    
    public function categroy()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the brand that owns the Product.
     */
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public static function generateCode() {
        return uniqid();
    }

}
