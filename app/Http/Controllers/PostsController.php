<?php

namespace App\Http\Controllers;

use App\Http\Requests\create_postsRequest;
use App\Http\Requests\Edit_postsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class postsController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')->get();
        return view('posts/index', ["posts" => $posts]);
    }
    public function create()
    {
        return view('posts/create');
    }
    public function store (create_postsRequest  $request)
    {

        DB::table('posts')->insert([
            "name" => $request->name,
            "last_name" => $request->last_name,
            "cat" => $request->cat,
            "texs" => $request->texs,
        ]);
        return redirect('posts/index');
    }
    public function edit( $id)
    {
        $posts = DB::table('posts')->where('id', $id)->first();
        return view('posts/edit', ["post" => $posts]);
    }

    public function update(Edit_postsRequest $request ,$id)
    {
        DB::table('posts')->where('id', $id)->update([
            "name" => $request->name,
            "last_name" => $request->last_name,
            "cat" => $request->cat,
            "texs" => $request->texs,
        ]);
        return redirect('posts/index');
    }

    public function destroy( $id)
    {
        DB::table('posts')->where('id', $id)->delete();
        return redirect('posts/index');
    }

}
