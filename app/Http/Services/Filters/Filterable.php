<?php

namespace App\Http\Services\Filters;

use Illuminate\Database\Eloquent\Builder;
//use Illuminate\Database\Query\Builder;

interface Filterable
{
    public static function apply(Builder $builder, $value);

}
