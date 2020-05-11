<?php

namespace Paraguay\Regions\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $guarded = ['id'];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}