<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductsController extends Controller
{
    function productsList() {
        $products = Product::all();
        return view('productsList', compact(['products']));
    }
    
    function getProduct($id) {
        return "This is product $id";
    }

    function editProduct($id) {
        $product = Product::find($id);
        return view('editProduct', compact(['product']));
    }

    function addProduct() {
        return view('addProduct');
    }

    function deleteProduct($id) {
        $product = Product::find($id);
        if($product->delete()) {
            return redirect('/productsList');
        }else{
            return "There was an error";
        }
    }

    function updateProduct(Request $req, $id) {
        $product = Product::find($id);
        $product->productName = $req->productName;
        $product->description = $req->description;
        $product->category = $req->category;
        $product->quantity = $req->quantity;
        $product->price = $req->price;
        $product->img_url = $req->img_url;
        if($product->save()) {
            return redirect('/productsList');
        }else{
            return "There was an error";
        }
    }

    function saveProduct(Request $req) {
        $product = new Product;
        $product->productName = $req->productName;
        $product->description = $req->description;
        $product->category = $req->category;
        $product->quantity = $req->quantity;
        $product->price = $req->price;
        $product->img_url = $req->img_url;
        if($product->save()) {
            return redirect('/productsList');
        }else{
            return "There was an error";
        }
    }

    // API Functions
    function productsListApi() {
        return Product::all();
    }
}
