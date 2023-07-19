<?php

namespace App\Models;
use App\Models\Multi_Image;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=['id','name','image','age','description','price','type'];


    public function productImage(){
        return $this->hasMany(Multi_Image::class,'product_id','id');

    }


}
