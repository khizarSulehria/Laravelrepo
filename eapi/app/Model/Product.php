<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\model\Reviews;

class Product extends Model
{
    //
    protected $fillable = [
		'name','detail','stock','price','discount'
    ];
    public function reviews()
    {
    	return $this->hasMany(Review::class); 
    }
}
