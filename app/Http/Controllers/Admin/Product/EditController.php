<?php
namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class EditController extends Controller
{
    public function __invoke(Product $product) {

        $columns = Schema::getColumnListing('products');
        $users_count = User::all()->count();
        $products_count = Product::all()->count();
        $categories_count = Category::all()->count();
        $categories = Category::all();



        $transaction_types  = [
            'Купить',
            'Продать',
            'Сдать',
            'Арендовать'
        ];

        $authors  = [
            'Собственник',
            'Посредник',
            'Агентство',
            'Администратор'
        ];

        $home_types  = [
            'Квартира',
            'Студия',
            'Апартаменты',
            'Дом',
            'Дача',
            'Котедж',
            'Отель',
            'Таунхаус',
            'Магазин',
            'Офис',
            'Склад',
            'Гараж',
            'Цоколь',
            'Мансарт'
        ];

        $additional_attrs  = [
            'Лоджия',
            'Балкон',
            'Гардероб',
            'Бассейн',
            'Газзон'
        ];

        $bathrooms = [
            'Совмещён',
            'Раздельна'
        ];

        $repairs = [
            'Евро',
            'Нет',
            'Старый',
        ];

        $elevators = [
            'Нет',
            'Легковой',
            'Грузовой',
            'Легковой и Грузовой'
        ];

        $parkings = [
            'Открытая',
            'Надземная',
            'Подземная',
            'Гараж',
            'Заезд'
        ];

        return view('admin.product.edit', compact(
            'product',
            'users_count',
            'products_count',
            'categories_count',
            'categories',
            'transaction_types',
            'authors',
            'home_types',
            'additional_attrs',
            'bathrooms',
            'repairs',
            'elevators',
            'parkings',
            'columns'
        ));
    }
}
