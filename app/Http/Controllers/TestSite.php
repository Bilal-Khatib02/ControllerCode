<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestSite extends Controller
{
    public function home()
    {
        return route('site.product');
    }
    public function about()
    {
        return 'Hello Posts';
    }
    public function posts()
    {
        return 'Hello Posts';
    }
    public function product()
    {
        return 'Hello Home';
    }
}
