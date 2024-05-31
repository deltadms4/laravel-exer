<?php

namespace App\Http\Middleware;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Product\StoreController;
use App\Models\Product;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except =
        [
            'http://127.0.0.1:8000/admin/product/*',
            'http://127.0.0.1:8000/admin/product/',
            'http://127.0.0.1:8000/admin/category/*',
            'http://127.0.0.1:8000/admin/category/',
            'http://127.0.0.1:8000/admin/user/',
            'http://127.0.0.1:8000/admin/user/*',
            'http://127.0.0.1:8000/user/',
            'http://127.0.0.1:8000/auth/'
        ];
}
