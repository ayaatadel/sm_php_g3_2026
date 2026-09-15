<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// $users=[
//     [
//   "id"=>1,
//   "name"=>"mohammed",
//   "age"=>22
//     ],
//     [
//   "id"=>2,
//   "name"=>"mohammoud",
//   "age"=>27
//     ],
//     [
//   "id"=>3,
//   "name"=>"malak",
//   "age"=>24
//     ],
//     [
//   "id"=>4,
//   "name"=>"haneen",
//   "age"=>23
//     ],
// ];

// Route::get('/users',function() use ($users)
// {
//     // var_dump($users); // blade ==> all users
//     // return view('allUsers',["users"=>$users]);
//     // compact ('var_name') ===>["users"=>$users]
//     return view('allUsers',compact('users'));

// });


// $courses=[
//     [
//   "id"=>1,
//   "name"=>"php",
//   "description"=>" sql Lorem ipsum dolor sit amet consectetur adipisicing elit."
//     ],
//     [
//   "id"=>2,
//   "name"=>"sql",
//   "description"=>" sql Lorem ipsum dolor sit amet consectetur adipisicing elit."

//     ],
//     [
//   "id"=>3,
//   "name"=>"laravel",
//   "description"=>" laravel Lorem ipsum dolor sit amet consectetur adipisicing elit."

//     ],
//     [
//   "id"=>4,
//   "name"=>"js",
//   "description"=>" js Lorem ipsum dolor sit amet consectetur adipisicing elit."

//     ],
// ];


// Route::get('/courses',function ()use ($courses){
// return view('courses',compact('courses'));
// });



Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/categories/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/update/{id}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destory');

// Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);
// show all routes : php atrisan route list
/**
 *  method           url                                     name                    function
 *   GET|HEAD        categories ......................     categories.index › CategoryController@index
 *   POST            categories ........................   categories.store › CategoryController@store
 *   GET|HEAD        categories/create ...............     categories.create › CategoryController@create
 *   GET|HEAD        categories/{category} ............... categories.show › CategoryController@show
 *   PUT|PATCH       categories/{category} ...........      categories.update › CategoryController@update
 *   DELETE          categories/{category} .........        categories.destroy › CategoryController@destroy
 *   GET|HEAD        categories/{category}/edit ..........  categories.edit › CategoryController@edit
 */

///=========== Create  :
/**
 * form : select data
 * store data
 */
