<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';

    protected $guarded = [];

    public function employees()
    {
        return $this->belongsTo(Employees::class);
    }
    public function price()
    {
        return $this->belongsTo(Price::class);
    }
}
