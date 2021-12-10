<?php

namespace App\Models;

use App\Models\Filters\Product\ProductSearch;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['title','price', 'status', 'description'];

    public function getProductsByName(Request $request) : Builder
    {
        $builder = (new ProductSearch())->apply($request);
        return $builder;
    }
}
