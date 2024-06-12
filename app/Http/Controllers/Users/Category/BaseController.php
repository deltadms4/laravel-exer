<?php
namespace App\Http\Controllers\Users\Category;

use App\Http\Controllers\Controller;
use App\Services\Category\CategoryServices;


class BaseController extends Controller
{
    public $service;

    public function __construct(CategoryServices $service) {

        $this->service = $service;
    }
}
