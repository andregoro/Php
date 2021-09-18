<?php

// use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

Route::get('products/create','ProductController@create');
Route::get('products/{id}','ProductController@show')->name('products.index');
Route::get('products','ProductController@index')->name('products.show');
*/

// Route::resource('products','ProductController');
// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('products','ProductController');//->middleare('auth');
// Route::delete('products/{id}', 'ProductController@destroy')->name('products.destroy');
// Route::put('products/{id}', 'ProductController@update')->name('products.update');
// Route::get('products/{id}/edit', 'ProductController@edit')->name('products.edit');
// Route::get('products/create', 'ProductController@create')->name('products.create');
// Route::get('products/{id}', 'ProductController@show')->name('products.show');
// Route::get('products', 'ProductController@index')->name('products.index');
// Route::post('products', 'ProductController@store')->name('products.store');

Route::get('/login', function () {
    return 'login';
})->name('login');

// Route::middleware(['auth'])->group(function()
// {
//     Route::prefix('admin')->group(function()
//     {

//     });
//     Route::get('/admin/dashboard', function () {
//         return 'Home Admin';
//     });

//     Route::get('/admin/financeiro', function () {
//         return 'Financeiro Admin';
//     });

//     Route::get('/admin/produto', function () {
//         return 'Produto Admin';
//     });
// });



// Route::get('redirect3', function () {
//     return redirect()->route('url.name');
// });

// // route('url.name');

// Route::get('/nome-url', function () {
//     return 'Hey hey hey';
// })->name('url.name');

// Route::view('/view', 'welcome', ['id' => 'teste']);

// Route::redirect('/redirect1', '/redirect2');

// // Route::get('redirect1', function () {
// //     return redirect('/redirect2');
// // });

// Route::get('redirect2', function () {
//     return 'Redirect 02';
// });

// Route::get('/produtos/{idProduct?}', function ($idProduct = '') {
//     return "Produto(s) {$idProduct}";
// });

// Route::get('/categoria/{flag}/posts', function ($flag) {
//     return "Posts da categoria: {$flag}";
// });

// Route::get('/categorias/{flag}', function ($prm1) {
//     return "Produtos da categoria: {$prm1}";
// });

// Route::match(['post', 'get'], '/match', function () {
//     return 'match';
// });

// Route::any('/any', function () {
//     return 'Any';
// });

// Route::post('/register', function () {
//     return 's';
// });

// Route::get('/empresa', function () {
//     return view('site.contact');
// });

// Route::get('/contato', function () {
//     return 'Contato';
// });

// Route::get('/', function () {
//     return view('welcome');
// });
