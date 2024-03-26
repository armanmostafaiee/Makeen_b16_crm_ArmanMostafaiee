<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\postsController;
use App\Http\Controllers\productsController;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting', function () {
    return 'Hello World';
});

////products Get and post Routeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee
Route::group(['prefix' => 'products'], function () {
    Route::get('create', [productsController::class, 'create'])->name('products.create');
    Route::get('edit/{id}', [productsController::class, 'edit'])->name('products.edit' );
    Route::get('index',[productsController::class, 'index'])->name('products.index');
    Route::post('create', [productsController::class, 'store'])->name('products.store');
    Route::post('edit/{id}', [productsController::class,'update'])->name('products.update');
    Route::delete('delete/{id}',[productsController::class,'destroy'])->name('products.delete');
});



////Orders Get and Post Routeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee
Route::group(['prefix' => 'orders'], function () {
    Route::get('create', [OrdersController::class, 'create'])->name('orders.create');
    Route::get('edit/{id}', [OrdersController::class, 'edit'])->name('orders.edit' );
    Route::get('index',[OrdersController::class, 'index'])->name('orders.index');
    Route::post('create', [OrdersController::class, 'store'])->name('orders.store');
    Route::post('edit/{id}', [OrdersController::class,'update'])->name('orders.update');
    Route::delete('delete/{id}',[OrdersController::class,'destroy'])->name('orders.delete');
});


////posts Get and Post Routeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee
Route::group(['prefix' => 'posts'], function () {
    Route::get('create', [postsController::class, 'create'])->name('posts.create');
    Route::get('edit/{id}', [postsController::class, 'edit'])->name('posts.edit' );
    Route::get('index',[postsController::class, 'index'])->name('posts.index');
    Route::post('create', [postsController::class, 'store'])->name('posts.store');
    Route::post('edit/{id}', [postsController::class,'update'])->name('posts.update');
    Route::delete('delete/{id}',[postsController::class,'destroy'])->name('posts.delete');
});


////users Get and Post Routeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee
Route::group(['prefix' => 'users'], function () {
    Route::get('create', [UsersController::class, 'create'])->name('users.create');
    Route::get('edit/{id}', [UsersController::class, 'edit'])->name('users.edit' );
    Route::get('index',[UsersController::class, 'index'])->name('users.index');
    Route::post('create', [UsersController::class, 'store'])->name('users.store');
    Route::post('edit/{id}', [UsersController::class,'update'])->name('users.update');
    Route::delete('delete/{id}',[UsersController::class,'destroy'])->name('users.delete');
});



////categories Get and Post Routeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee
Route::group(['prefix' => 'categories'], function () {
    Route::get('create', [CategoriesController::class, 'create'])->name('categories.create');
    Route::get('edit/{id}', [CategoriesController::class, 'edit'])->name('categories.edit' );
    Route::get('index',[CategoriesController::class, 'index'])->name('categories.index');
    Route::post('create', [CategoriesController::class, 'store'])->name('categories.store');
    Route::post('edit/{id}', [CategoriesController::class,'update'])->name('categories.update');
    Route::delete('delete/{id}',[CategoriesController::class,'destroy'])->name('categories.delete');
});


/*
Route::get('users/create',
});

Route::get('users/edit/{id}', function ($id) {
    $users = DB::table('users')->where('id', $id)->first();
    return view('users.edit', ['user' => $users]);
});

Route::get('users/index', function () {
    $users = DB::table('users')->get();
    return view('users.index', ["users" => $users]);
});

////users post Routeeeeeeeeeeeeeeeeeeeeeee

Route::post('users/create', function (Request $request) {
    DB::table('users')->insert([
        "name" => $request->name,
        "last_name" => $request->last_name,
        "tahsilat" => $request->tahsilat,
        "age" => $request->age,

    ]);
    return redirect('users/index');
});

Route::post('users/edit/{id}', function (Request $request, $id) {
    DB::table('users')->where('id', $id)->update([
        "name" => $request->name,
        "last_name" => $request->last_name,
        "tahsilat" => $request->tahsilat,
        "age" => $request->age,

    ]);
    return redirect('users/index');
});

Route::delete('users/delete/{id}', function ($id) {

    DB::table('users')->where('id', $id)->delete();
    return redirect('users/index');
});

////orders Get Routeeeeeeeeeeeeeeeeeeeeeee

Route::get('orders/create', function () {
    return view('orders.create');
});

Route::get('orders/edit/{id}', function ($id) {
    $orders = DB::table('orders')->where('id', $id)->first();
    return view('orders.edit', ['order' => $orders]);
});

Route::get('orders/index', function () {
    $orders = DB::table('orders')->get();
    return view('orders.index', ["orders" => $orders]);
});

////orders post Routeeeeeeeeeeeeeeeeeeeeeee

Route::post('orders/create', function (Request $request) {
    DB::table('orders')->insert([
        "name_product" => $request->name_product,
        "location" => $request->location,
        "mojodi" => $request->mojodi,
        "code" => $request->code,

    ]);
    return redirect('orders/index');
});

Route::post('orders/edit/{id}', function (Request $request, $id) {
    DB::table('orders')->where('id', $id)->update([
        "name_product" => $request->name_product,
        "location" => $request->location,
        "mojodi" => $request->mojodi,
        "code" => $request->code,

    ]);
    return redirect('orders/index');
});

Route::delete('orders/delete/{id}', function ($id) {

    DB::table('orders')->where('id', $id)->delete();
    return redirect('orders/index');
});

//// posts Get Routeeeeeeeeeeeeeeeeeeeeeee

Route::get('posts/create', function () {
    return view('posts.create');
});

Route::get('posts/edit/{id}', function ($id) {
    $posts = DB::table('posts')->where('id', $id)->first();
    return view('posts.edit', ['post' => $posts]);
});

Route::get('posts/index', function () {
    $posts = DB::table('posts')->get();
    return view('posts.index', ["posts" => $posts]);
});

////posts post Routeeeeeeeeeeeeeeeeeeeeeee

Route::post('posts/create', function (Request $request) {
    DB::table('posts')->insert([
        "name" => $request->name,
        "last_name" => $request->last_name,
        "cat" => $request->cat,
        "texs" => $request->texs,

    ]);
    return redirect('posts/index');
});

Route::post('posts/edit/{id}', function (Request $request, $id) {
    DB::table('posts')->where('id', $id)->update([
        "name" => $request->name,
        "last_name" => $request->last_name,
        "cat" => $request->cat,
        "texs" => $request->texs,

    ]);
    return redirect('posts/index');
});

Route::delete('posts/delete/{id}', function ($id) {

    DB::table('posts')->where('id', $id)->delete();
    return redirect('posts/index');
});


//// categories Get Routeeeeeeeeeeeeeeeeeeeeeee

Route::get('categories/create', function () {
    return view('categories.create');
});

Route::get('categories/edit/{id}', function ($id) {
    $categories = DB::table('categories')->where('id', $id)->first();
    return view('categories.edit', ['category' => $categories]);
});

Route::get('categories/index', function () {
    $categories = DB::table('categories')->get();
    return view('categories.index', ["categories" => $categories]);
});

////categories post Routeeeeeeeeeeeeeeeeeeeeeee

Route::post('categories/create', function (Request $request) {
    DB::table('categories')->insert([
        "name" => $request->name,
        "texs" => $request->texs,

    ]);
    return redirect('categories/index');
});

Route::post('categories/edit/{id}', function (Request $request, $id) {
    DB::table('categories')->where('id', $id)->update([
        "name" => $request->name,
        "texs" => $request->texs,


    ]);
    return redirect('categories/index');
});

Route::delete('categories/delete/{id}', function ($id) {

    DB::table('categories')->where('id', $id)->delete();
    return redirect('categories/index');
});
*/
