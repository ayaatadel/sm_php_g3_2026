 <?php

    use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');
Route::view('/dashboard', 'dashboard')->name('dashboard');
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::get('/showLogin', [AuthController::class, 'showLogin'])->name('auth.showLogin');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('/showRegister', [AuthController::class, 'showRegister'])->name('auth.showRegister');
Route::post('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/chatbot', [ChatbotController::class, 'index'])->name('chatbot.index');
    Route::post('/chatbot/respond', [ChatbotController::class, 'respond'])->name('chatbot.respond');
});

// Route::get('/', function () {
//     return view('welcome');
// })->name('welcome');

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

// ============== Authentication Routes
// Route::get('/showRegister', [AuthController::class, 'showRegister'])->name('auth.showRegister');
// Route::post('/register', [AuthController::class, 'register'])->name('auth.register');
// Route::get('/showLogin', [AuthController::class, 'showLogin'])->name('auth.showLogin');
// Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// //=======================
// Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware(['isAdmin'])->name('dashboard');

// // ---  =============== middleware group

// Route::middleware(['auth','isAdmin'])->group(function(){
//     Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
// Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
// Route::get('/categories/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
// Route::put('/categories/update/{id}', [CategoryController::class, 'update'])->name('categories.update');
// Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destory');

// });

// //================ Uers Route
// Route::get('/uers', [UserController::class, 'index'])->name('users.index');

// Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
// // Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
// Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
// Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('categories.show');
// // Route::get('/categories/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
// // Route::put('/categories/update/{id}', [CategoryController::class, 'update'])->name('categories.update');
// // Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destory');

// // Route::resource('categories', CategoryController::class);
// Route::resource('products', ProductController::class)->middleware('guest');
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

// /=========== Create  :
/**
 * form : select data
 * store data
 */
