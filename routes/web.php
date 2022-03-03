<?php


use Illuminate\Support\Facades\Route;


  //array("title"=>"CSE4500 Class","start"=>"2022=02-28T17:30:00","end"=>"2022-02-28T18:45:00")
//);
/*
[
    {
        "title": "CSE4500 Class",
        "start": "2022-02-23T17:30:00",
        "end": "2022-02-23T18:45:00"
    },
    {
        "title": "CSE4500 Class",
        "start": "2022-02-28T17:30:00",
        "end": "2022-02-28T18:45:00"
    }
]
*/
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
Route::get('/admin/todos', function () {
    return view('todos');
});
Route::get('/admin/schedule', function () {
    return view('calendar');
});
Route::get('/admin/board', function () {
    return view('board');
});
Route::get('/events-feed', function () {
    $events = array("title"=>"CSE4500 Class","start"=>"2022=02-23T17:30:00","end"=>"2022-02-23T18:45:00");
    return json_encode($events);
});
Route::fallback(function () {
    return view('emergency');
});

Route::get('/db-test',function () {
  try{
    \DB::connection()->getPDO();
    $db_name = \DB::connection()->getDatabaseName();
    echo 'Database Connected: '.$db_name;
  } catch (\Exception $e){
    echo 'Nne';
  }
});
Route::get('/db-migrate', function(){
  Artisan::call('migrate');
  echo Artisan::output();
});
