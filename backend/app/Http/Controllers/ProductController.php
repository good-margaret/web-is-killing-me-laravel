<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return Product::query()->get();
    }

    public function info($id)
    {
        return Product::query()
            ->where('id', $id)
            ->first();
    }

    public function top()
    {
        return Product::query()
            ->limit(4)
            ->orderBy('created_at', 'desc')
            ->get();
    }
}
