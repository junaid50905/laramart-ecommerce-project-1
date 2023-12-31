<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $table = 'brands';
    protected $fillable = ['brand_name', 'brand_slug', 'brand_img', 'front_page'];


    //relations
    public function products()
    {
        return $this->hasMany(AllProduct::class);
    }
}
