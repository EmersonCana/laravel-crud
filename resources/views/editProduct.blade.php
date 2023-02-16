@extends('layouts.mainLayout')

@section('content')
    <div class="col-4 offset-4">
        <div class="card">
            <div class="card-header">Edit Product</div>
            <div class="card-body">
                <form action="/updateProduct/{{$product->id}}" method="POST">
                    @csrf
                    <input type="text" name="productName" class="form-control" value="{{$product->productName}}" placeholder="Product Name"><br>
                    <input type="text" name="description" class="form-control" value="{{$product->description}}" placeholder="Description"><br>
                    <input type="text" name="category" class="form-control" value="{{$product->category}}" placeholder="Category"><br>
                    <input type="number" name="quantity" class="form-control" value="{{$product->quantity}}" placeholder="Quantity"><br>
                    <input type="number" name="price" class="form-control" value="{{$product->price}}" placeholder="Price"><br>
                    <input type="text" name="img_url" class="form-control" value="{{$product->img_url}}" placeholder="URL"><br>
                    <button class="btn btn-primary" type="submit">Edit Product</button>
                </form>
            </div>
        </div>
    </div>
@endsection