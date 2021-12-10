<div class="card-body">
    <div class="form-group">
        <label>Name</label>
{{--        todo validation input save ex.--}}
        <input type="text" name="title" value="{{old('title') ? : ($product->title ?? false)}}" class="form-control"
               placeholder="please add product name">
        @if ($errors->has('title'))
            <span class="text-danger">{{ $errors->first('title') }}</span>
        @endif
    </div>
    <div class="form-group">
        <label>Price</label>
        <input type="text" name="price" value="{{old('price') ? : ($product->price ?? false)}}" class="form-control">
        @if ($errors->has('price'))
            <span class="text-danger">{{ $errors->first('price') }}</span>
        @endif
    </div>
    <div class="form-group">
        <label>Status</label>
        <input type="checkbox" name="status" value="1" @if(isset($product->status) && $product->status) checked @endif >
    </div>
    <div class="form-group">
        <label>Description</label>
        <input type="text" name="description" value="{{$product->description??false}}" class="form-control">
    </div>
</div>
<!-- /.card-body -->

<div class="card-footer">
    <button type="submit"
            class="btn btn-primary">{{isset($is_update) && $is_update === true ? 'Update' : 'Create'}}</button>
</div>
