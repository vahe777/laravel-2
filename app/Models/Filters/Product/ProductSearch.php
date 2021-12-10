<?php

namespace App\Models\Filters\Product;

use App\Http\Services\Filters\BaseSearch;
use App\Http\Services\Filters\Searchable;
use App\Models\Product;

class ProductSearch implements Searchable
{
    const MODEL = Product::class;

    use BaseSearch;

}
