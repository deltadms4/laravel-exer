<?php

namespace App\Services\Category;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Mockery\Exception;

class CategoryServices
{
        public function store($data)
        {
            $category = Category::firstOrCreate($data);

            return $category;
        }

}
