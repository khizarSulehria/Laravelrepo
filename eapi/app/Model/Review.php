<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\model\Product;

class Review extends Model
{
    //
    protected $fillable = [
		'star','customer','review'
    ];
    public function product()
    {
    	return $this->belongsTo(Product::class); 
    }
}
