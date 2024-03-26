<?php

namespace App\Http\Controllers;

use App\Http\Requests\create_categoriesRequest;
use App\Http\Requests\Edit_categoriesRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = DB::table('categories')->get();
        return view('categories/index', ["categories" => $categories]);
    }
    public function create()
    {
        return view('categories/create');
    }
    public function store (create_categoriesRequest  $request)
    {

        DB::table('categories')->insert([
            "name" => $request->name,
            "texs" => $request->texs,
        ]);
        return redirect('categories/index');
    }
    public function edit( $id)
    {
        $categories = DB::table('categories')->where('id', $id)->first();
        return view('categories/edit', ["category" => $categories]);
    }

    public function update(Edit_categoriesRequest $request ,$id)
    {
        DB::table('categories')->where('id', $id)->update([
            "name" => $request->name,
            "texs" => $request->texs,
        ]);
        return redirect('categories/index');
    }

    public function destroy( $id)
    {
        DB::table('categories')->where('id', $id)->delete();
        return redirect('categories/index');
    }

}
