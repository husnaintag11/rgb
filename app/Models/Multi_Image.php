<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Multi_Image extends Model
{
    use HasFactory;
    protected $fillable=['id','multi_image','product_id'];



}
