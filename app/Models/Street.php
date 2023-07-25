<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Street extends Model
{
    use HasFactory;
    protected $fillable=['id','name','city_id'];

    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
