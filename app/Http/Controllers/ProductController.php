<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return Product::all();
    }

    public function show($id){
        return Product::where('id', $id)->first();
    }

    public function store(Request $request){
        return Product::create([
            'name'  => $request->input('name'),
            'price' => $request->input('price'),
        ]);
    }

    public function update(Request $request, $id){
        return Product::where('id', $id)->update([
            'name'  => $request->input('name'),
            'price' => $request->input('price'),
        ]);
    }

    public function destroy($id){
        Product::where('id', $id)->delete();
    }
}
