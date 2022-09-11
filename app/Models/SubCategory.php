<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $fillable=['id','name','category_id'];

    protected $appends  = ['category_name'];

    public function getCategoryNameAttribute()
    {
      $cat=Category::find($this->category_id);
      return $cat->name;
    }
}
