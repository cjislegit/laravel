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
        //Finds record with the id entered and stores it is pizza var, if record does not exist a 404 page is served
        $pizza = Pizza::findOrFail($id);
        return view('pizzas.show', ['pizza' => $pizza]);

    }

    public function create() {
        return view('pizzas.create');
    }
}