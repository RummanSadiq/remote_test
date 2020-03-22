<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriesModel extends Model
{
    protected $table = 'Categories';
    protected $fillable =
    [
        'name', 'price', 'parent_id', 'quantity'
    ];

    public function parent()
    {
        return $this->belongsTo('categories', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany('categories', 'parent_id');
    }
}
