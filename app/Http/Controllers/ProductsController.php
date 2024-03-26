<?php

namespace App\Http\Controllers;
use App\Http\Requests\create_productsRequest;
use App\Http\Requests\Edit_productsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productsController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->get();
        return view('products/index', ["products" => $products]);
    }
    public function create()
    {
        return view('products/create');
    }
    public function store (create_productsRequest  $request)
    {

        DB::table('products')->insert([
            "name_product" => $request->name_product,
            "color" => $request->color,
            "mark" => $request->mark,
            "price" => $request->price,
        ]);
        return redirect('products/index');
    }
    public function edit( $id)
    {
        $products = DB::table('products')->where('id', $id)->first();
        return view('products/edit', ["product" => $products]);
    }

    public function update(Edit_productsRequest $request ,$id)
    {
        DB::table('products')->where('id', $id)->update([
            "name_product" => $request->name_product,
            "color" => $request->color,
            "mark" => $request->mark,
            "price" => $request->price,
        ]);
        return redirect('products/index');
    }

    public function destroy( $id)
    {
        DB::table('products')->where('id', $id)->delete();
        return redirect('products/index');
    }
}
