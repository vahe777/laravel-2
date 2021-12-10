<div>
    <form>
        <div class="form-group">
            <label>Filter by name</label>
            <input type="text" name="search" class="form-control" id="search">
        </div>
        <div class="form-group">
            <label>Filter by price</label>
            <input type="text" name="price" class="form-control" id="search">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <hr>
</div>

<div class="col-md-12">
    <div class="filters-content">
        <div class="row grid">
            @foreach($products as $product)
                <div class="col-lg-4 col-md-4 all des">
                    <div class="product-item">
                        <div class="down-content">
                            <h1>{{$product->title}}</h1>
                            <h3>$ {{$product->price}}</h3>
                            <p>{{$product->description}}</p>
                            @if($product->status)
                                <p style="color: #008200">Active</p>
                            @else
                                <p style="color: #dc3545">None</p>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
{{--            {{$products->links('pagination.index')}}--}}
{{--{{$products->appends(Request::all())->links('pagination.index')}}--}}

