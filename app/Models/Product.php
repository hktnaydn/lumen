<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'category_id',
        'status',
        'sku',
    ];
    public function category(){
        return $this->hasOne("App\Models\Category","id","category_id");
    }
}