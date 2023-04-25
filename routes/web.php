<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Students;
use App\Models\Tests;
use App\Models\Messages;
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

Route::get('/Group-List', function () {
    $obj = Students::all();
    //dd($obj);
    $obj = $obj->sortBy('Name');
    return view('main', [
        "obj" => $obj,
        "title" => "Список"
    ]);
});

Route::get('/Test-Check', function () {
    $obj = Students::all();
    $testName = DB::select('select distinct Test_Name from Tests');
    $obj = $obj->sortBy('Name');
    //dd($_GET);
    return view('test', [
        "obj" => $obj,
        "testName" => $testName,
        "title" => "Контроль"
    ]);

});

Route::get('/Test-Check/{tName}', function (Request $request, $tName) {
    //$obj = Students::pluck('Name', 'Id');
    //dd($obj);
    $obj = DB::select("select Name, Res, Test_Name from Students inner join Tests on Id_stud = Students.Id where res = false and Test_Name = ?", [$tName]);
    $testName = DB::select('select distinct Test_Name from Tests');
    //dd($obj);
    return view('test', [
        "obj" => $obj,
        "testName" => $testName,
        "title" => "Контроль"
    ]);

});

Route::get('/Messages', function () {
    $obj = Messages::all();

    $obj = $obj->sortByDesc('Date');

    //dd($_GET);
    return view('Messages', [
        "obj" => $obj,
        "title" => "Список"
    ]);
});

