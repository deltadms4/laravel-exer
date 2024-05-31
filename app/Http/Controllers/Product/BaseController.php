<?php
namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Service\PostServices;
use App\Services\Product\ProductServices;


class BaseController extends Controller
{
    public $service;

    public function __construct(ProductServices $service) {

        $this->service = $service;
    }
}
