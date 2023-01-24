<?php
use App\Models\Student;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\ProvisionServer;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::get('/test',function(){

// $students=Student::all();
// return $students;

// $students=DB::table('students')->get();





return $students;

});

//routing and templete engine
Route::get('blade/{name?}',function($name = null){
    $data="<h2> welcome to Cooking Recipes with sabir </h2>";
    $name=compact('name','data');
    return view('bladeTemplating')->with($name,$data);
    });

Route::get('/invokable-controller',ProvisionServer::class);

Route::get('/comp',function(){
    return view('rcomponent');
});