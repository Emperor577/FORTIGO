<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Product extends Model
{
    use Translatable;
    protected $translatable = ['name', 'description'];

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
    }
}
