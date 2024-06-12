<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


        $categories_count = Category::all()->count();
        $products_count = Product::all()->count();
        $users_count = User::all()->count();

        return view('admin.main.home', compact('categories_count', 'products_count', 'users_count'));
    }
}
