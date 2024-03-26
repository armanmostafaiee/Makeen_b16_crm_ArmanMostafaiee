<?php

namespace App\Http\Controllers;

use App\Http\Requests\create_ordersRequest;
use App\Http\Requests\Edit_ordersRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = DB::table('orders')->get();
        return view('orders/index', ["orders" => $orders]);
    }
    public function create()
    {
        return view('orders/create');
    }
    public function store (create_ordersRequest  $request)
    {

        DB::table('orders')->insert([
            "name_product" => $request->name_product,
            "location" => $request->location,
            "mojodi" => $request->mojodi,
            "code" => $request->code,
        ]);
        return redirect('orders/index');
    }
    public function edit( $id)
    {
        $orders = DB::table('orders')->where('id', $id)->first();
        return view('orders/edit', ["product" => $orders]);
    }

    public function update(Edit_ordersRequest $request ,$id)
    {
        DB::table('orders')->where('id', $id)->update([
            "name_product" => $request->name_product,
            "location" => $request->location,
            "mojodi" => $request->mojodi,
            "code" => $request->code,
        ]);
        return redirect('orders/index');
    }

    public function destroy( $id)
    {
        DB::table('orders')->where('id', $id)->delete();
        return redirect('orders/index');
    }

}
