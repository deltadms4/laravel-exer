<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */

    protected $except =
        [
            'http://127.0.0.1:8000/*',
            'http://127.0.0.1:8000/admin/product/*',
            'http://127.0.0.1:8000/admin/product/',
            'http://127.0.0.1:8000/admin/category/*',
            'http://127.0.0.1:8000/admin/category/',
            'http://127.0.0.1:8000/admin/user/index',
            'http://127.0.0.1:8000/admin/user/*',
            'http://127.0.0.1:8000/user/',
            'http://127.0.0.1:8000/auth/',

            //

            'http://back.vseturniri.online/admin/product/*',
            'http://back.vseturniri.online/admin/product/',
            'http://back.vseturniri.online/admin/category/*',
            'http://back.vseturniri.online/admin/category/',
            'http://back.vseturniri.online/admin/user/',
            'http://back.vseturniri.online/admin/user/*',
            'http://back.vseturniri.online/user/',
            'http://back.vseturniri.online/auth/'

        ];


}
