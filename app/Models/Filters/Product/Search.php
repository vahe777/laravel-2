<?php

namespace App\Models\Filters\Product;

use App\Http\Services\Filters\Filterable;
//use Illuminate\Database\Query\Builder;
use Illuminate\Database\Eloquent\Builder;

class Search implements Filterable
{
    public static function apply(Builder $builder, $value)
    {
        return $builder->where('title', $value);
//        return $builder->where('price', $value);
    }

}
