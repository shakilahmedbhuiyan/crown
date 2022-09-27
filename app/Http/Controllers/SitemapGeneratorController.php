<?php

namespace App\Http\Controllers;

use App\Models\FoodCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;

class SitemapGeneratorController extends Controller
{
    public function index(): \Illuminate\Http\Response
    {
        $categories = FoodCategory::all();
        return response()->view('sitemap', compact('categories'))
            ->header('Content-Type', 'text/xml');
    }
}
