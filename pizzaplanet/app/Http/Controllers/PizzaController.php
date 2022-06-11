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

    //   Querries the DB for all records
        //$pizzas = Pizza::All();
    
    //Querries the DB for all records and orders them by name
        //$pizzas = Pizza::orderBy('name', 'desc')->get();

    //Querries records that have type of hawaiian
        //$pizzas = Pizza::where('type', 'hawaiian')->get();
    
    //Querries for all records and retrieves them by date order
        $pizzas = Pizza::latest()->get();

        return view('pizzas.index', [
            'pizzas' => $pizzas,
            'name' => request('name'),
        ]);

    }

    public function show($id)
    {
        return view('pizzas.show', ['id' => $id]);

    }

    public function create() {
        return view('pizzas.create');
    }
}