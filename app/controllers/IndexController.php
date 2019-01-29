<?php

namespace App\Controllers;

use App\Core\App;

class IndexController
{
    /**
     * Show all users.
     */
    public function index()
    {
        $parameters['brend'] = !empty($_GET['brend']) ? $_GET['brend'] : 1;
        $bikes = App::get('database')->selectAllWhere('bikes', $parameters);
        $brends = App::get('database')->selectAll('brends');

        return view('index', compact('bikes','brends'));
    }

    /**
     * Store a new user in the database.
     */
    public function store()
    {
        App::get('database')->insert('bikes', [
            'name' => $_POST['name']
        ]);

        return redirect('bikes');
    }
}