<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Users\Product\BaseController;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;


class CreateController extends BaseController
{
    public function __invoke()
        {
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

            return view('admin.product.create',
                compact(
                    'categories',
                    'users_count',
                    'products_count',
                    'categories_count',
                    'transaction_types',
                    'authors',
                    'home_types',
                    'additional_attrs',
                    'bathrooms',
                    'repairs',
                    'elevators',
                    'parkings'
                ));
        }
}
