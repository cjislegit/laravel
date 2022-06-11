<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index()
    {
        $pizza = [
            'type' => 'hawaiian',
            'base' => 'normal',
            'price' => 6,
        ];

        $pizzas = Pizza::All();

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