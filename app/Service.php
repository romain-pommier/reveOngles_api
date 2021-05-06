<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'sub_category_services_id',
        'amount',
        'name'
    ];
}
