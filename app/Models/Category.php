<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
    'id',
    'name',
    'image'


];
protected $appends = [
    'sub_categories'

];
public function getSubcategoriesAttribute()
{
  return DB::table('sub_categories')->where('category_id',$this->id)->get();
}

}
