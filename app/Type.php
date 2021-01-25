<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'types';

    protected $guarded = [];

    public function price()
    {
        return $this->hasMany(Price::class);
    }
}
