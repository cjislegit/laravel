<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index()
    {
        $pizza = [
            'type' => 'hawaiian',
            'base' => 'normal',
            'price' => 6,
        ];

        $pizzas = [
            ['type' => 'hawaiian', 'base' => 'chssey crust'],
            ['type' => 'volcano', 'base' => 'garlic crust'],
            ['type' => 'veg supreme', 'base' => 'thin & crispy'],
        ];

        return view('pizzas', [
            'pizzas' => $pizzas,
            'name' => request('name'),
        ]);

    }

    public function show($id)
    {
        return view('details', ['id' => $id]);

    }
}