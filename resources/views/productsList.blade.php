@extends('layouts.mainLayout')

@section('content')
    @foreach($products as $product)
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="{{$product->img_url}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$product->productName}}</h5>
                    <p class="card-text">{{$product->description}}</p>
                    <p class="card-text">Price: {{$product->price}}</p>
                    <p class="card-text">Stocks: {{$product->quantity}}</p>
                    <div class="text-center">
                        <a href="/editProduct/{{$product->id}}" class="btn btn-secondary">Edit Product</a>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                        <a href="#" class="btn btn-warning">Buy</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection