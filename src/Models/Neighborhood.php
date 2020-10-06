<?php

namespace Paraguay\Regions\Models;

use Illuminate\Database\Eloquent\Model;
use Paraguay\Regions\Traits\SortedByName;

class Neighborhood extends Model
{
    use SortedByName;
    
    protected $guarded = ['id'];

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}