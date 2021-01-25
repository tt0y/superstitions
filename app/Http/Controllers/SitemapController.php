<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Sitemap\SitemapGenerator;

class SitemapController extends Controller
{
    public function index()
    {
        SitemapGenerator::create(config('app.url').'/sitemap-superstitions-list/')
            ->writeToFile(public_path('sitemap.xml'));
    }
}
