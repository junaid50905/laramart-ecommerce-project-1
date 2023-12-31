<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;
    protected $table = 'warehouses';
    protected $fillable = ['warehouse_name', 'warehouse_phone', 'warehouse_address'];


    public function products()
    {
        return $this->hasMany(AllProduct::class, 'warehouse_id', 'id');
    }
}
