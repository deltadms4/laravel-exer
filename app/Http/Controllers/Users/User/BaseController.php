<?php
namespace App\Http\Controllers\Users\User;

use App\Http\Controllers\Controller;
use App\Service\PostServices;
use App\Services\User\UserServices;


class BaseController extends Controller
{
    public $service;

    public function __construct(UserServices $service) {

        $this->service = $service;
    }
}
