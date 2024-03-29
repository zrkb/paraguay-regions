<?php

namespace Paraguay\Regions\Models;

use Illuminate\Database\Eloquent\Model;
use Paraguay\Regions\Traits\SortedByName;

class Department extends Model
{
    use SortedByName;

    protected $guarded = ['id'];

    public function cities()
    {
        return $this->hasMany(City::class);
    }
}