<?php

namespace App\Controllers;

use App\Core\App;

class ProductController
{
    /**
     * Show all users.
     */
    public function index()
    {
        $bike = App::get('database')->selectOne('bikes', $_GET['brend']);
        $brends = App::get('database')->selectAll('brends');

        return view('product', compact('bike','brends'));
    }
}