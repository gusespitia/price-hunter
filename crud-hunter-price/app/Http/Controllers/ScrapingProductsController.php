<?php

namespace App\Http\Controllers;

use App\Models\ScrapingProduct;
use Illuminate\Http\Request;

class ScrapingProductsController extends Controller
{
    public function index()
    {
        $scrapingProduct = ScrapingProduct::all();
        return view('scrapingProduct.index', compact('scrapingProduct'));
    }
}
