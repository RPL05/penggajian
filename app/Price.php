<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $table = 'prices';

    protected $guarded = [];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    public function payment()
    {
        return $this->hasMany(Payment::class);
    }
}
