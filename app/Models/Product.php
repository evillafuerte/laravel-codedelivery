<?php

namespace CodeDelivery\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
      'category_id',
      'name',
      'description',
      'price'
    ];

    public function category()
    {
        return $this->belongsTo(Product::class);
    }
    //
}
