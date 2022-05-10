<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Employee;
use Illuminate\Http\Request;

class AssetController extends Controller
{
    public function create()
    {
        $products = Product::all();
        $employees =Employee::all();

        return view('assets.create', ['products' => $products, 'employees'=>$employees]);
    }

    public function store()
    {
       $data = request()->all();


       //Method 1
        // $flower =  Flower();
        // $flower->name = "Semparuthi";
        // $flower->save();

        //Method 2
        $flower = Flower::create([
            'name' => 'Semparuthi'
        ]);







       return 24354;
    }

}
