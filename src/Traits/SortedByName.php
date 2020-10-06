<?php

namespace Paraguay\Regions\Traits;

use Illuminate\Database\Eloquent\Builder;

trait SortedByName
{
    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('order_by_name', function (Builder $builder) {
            $builder->orderBy('name');
        });
    }
}
