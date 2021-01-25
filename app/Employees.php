<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $table = 'employeess';

    protected $guarded = [];

    public function payment()
    {
        return $this->hasMany(Payment::class);
    }
}
