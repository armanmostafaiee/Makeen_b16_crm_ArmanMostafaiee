<?php

namespace App\Http\Controllers;

use App\Http\Requests\create_usersRequest;
use App\Http\Requests\Edit_usersRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function index(){
        $users = DB::table('users')->get();
        return view('users.index', ["users"=>$users]);
    }
    public function create(){
        return view('users.create');
    }
public function store(create_usersRequest $request){

    DB::table('users')->insert([
        "name" => $request->name,
        "last_name" => $request->last_name,
        "tahsilat" => $request->tahsilat,
        "age" => $request->age,
    ]);
    return redirect('users/index');
}
public function edit( $id)
{
    $users = DB::table('users')->where('id', $id)->first();
    return view('users/edit', ["user" => $users]);
}

public function update(Edit_usersRequest $request ,$id)
{
    DB::table('users')->where('id', $id)->update([
        "name" => $request->name,
        "last_name" => $request->last_name,
        "tahsilat" => $request->tahsilat,
        "age" => $request->age,
    ]);
    return redirect('users/index');
}

public function destroy( $id)
{
    DB::table('users')->where('id', $id)->delete();
    return redirect('users/index');
}


}
