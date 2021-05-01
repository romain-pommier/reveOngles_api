<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategoryService extends Model
{
    protected $fillable = [
        'category_id',
        'title'
    ];
}
