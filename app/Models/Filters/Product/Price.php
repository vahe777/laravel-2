<?php

namespace App\Models\Filters\Product;

use App\Http\Services\Filters\Filterable;
use Illuminate\Database\Eloquent\Builder;

class Price implements Filterable
{
    public static function apply(Builder $builder, $value)
    {
        return $builder->where('description', $value);
    }

}
