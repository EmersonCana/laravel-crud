@extends('layouts.mainLayout')

@section('content')
    <div class="col-4 offset-4">
        <div class="card">
            <div class="card-header">Add Product</div>
            <div class="card-body">
                <form action="/saveProduct" method="POST">
                    @csrf
                    <input type="text" name="productName" class="form-control" placeholder="Product Name"><br>
                    <input type="text" name="description" class="form-control" placeholder="Description"><br>
                    <input type="text" name="category" class="form-control" placeholder="Category"><br>
                    <input type="number" name="quantity" class="form-control" placeholder="Quantity"><br>
                    <input type="number" name="price" class="form-control" placeholder="Price"><br>
                    <input type="text" name="img_url" class="form-control" placeholder="URL"><br>
                    <button class="btn btn-primary" type="submit">Add Product</button>
                </form>
            </div>
        </div>
    </div>
@endsection