<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\StoreRequest;
use App\Http\Resources\Product\ProductResource;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->input();

        $category_id = $data['category_id'];

        $posts = Product::where('category', $category_id)->get();

        print_r(json_encode($posts));
    }

    public function add(StoreRequest $request)
    {
        $data = $request->validated();

        $posts = Product::where('category', $data['title'])->get();

        dd($data);
    }

    public function list()
    {
        dd(Product::all());
    }

    public function one(Request $request)
    {
        $data = $request->input();
        $product = Product::find($data['id']);
        return json_encode($product);
    }

    public function update(Request $request)
    {
        $data = $request->input();
        $product = Product::find($data['id']);
        $product->update($data);
        return $product;
    }
}
