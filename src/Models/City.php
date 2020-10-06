<?php

namespace Paraguay\Regions\Models;

use Illuminate\Database\Eloquent\Model;
use Paraguay\Regions\Traits\SortedByName;

class City extends Model
{
    use SortedByName;
    
    protected $guarded = ['id'];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function neighborhoods()
    {
        return $this->hasMany(Neighborhood::class);
    }
}