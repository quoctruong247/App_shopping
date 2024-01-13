<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;
use Illuminate\Http\Request;
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


Route::get('/', function ()  {
    return view('pages.index');
})->name('home');
Route::get('/about', function ()  {
    return view('pages.about');
});
Route::get('/login', function ()  {
    return view('pages.login');
})->name('login');
Route::get('/cart', function ()  {
    return view('pages.cart');
})->name('cart');
//----------------------------------------------------
//admin page
Route::group(['prefix'=>'admin','as'=>'admin.','namespace'=>'admin'],function(){
    Route::get('/',function(){
        return view('admin.dashboard.index');
    });
    Route::get('/users',function(){
        return view('admin.users.user-list',['users'=>\App\Models\User::latest()->get()]);
    })->name('user.list');



    Route::get('/categories', function(){
        return view('admin.categories.list',['categories'=>\App\Models\Category::latest()->get()]);
    })->name('category.list');

    Route::get('/categories/add',function(){
        return view('admin.categories.add');
    })->name('category.add');

    Route::get('/categories/edit/{id}',function(){
        return view('admin.categories.edit');
    })->name('category.edit');
    Route::post('/categories/store',function(Request $request){
        
        $data = $request->validate([
            'title'=>'required|max:255',
            'image'=>'required',
        ]);
        $category = new Category;
        $category->title = $data['title'];
        $category->image= $data['image'];
        $category->save();
        return redirect()->route('admin.category.list',['id'=>$category->id]);
    })->name('category.store');

    Route::get('/products',function(){
        return view('admin.products.product-list');
    })->name('product.list');
    
});



//Auth::routes();

//Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
