<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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
    return view(
        'pages.login.login',
        'pages.home.home',
        [
            "page" => "login"
        ]
    );
});

Route::get('/home', function () {
    return view(
        'pages.home.home',
        [
            "page" => "Home",
            "title" => "Home"
        ]
    );
});

Route::get('list', function () {
    return view('pages.calendar.calendar',  [
        "page" => "calendar",
        "title" => "Your Schedule"
    ]);
});


Route::get('/absen', function () {
    return view('pages.absen.absen',  [
        "page" => "absen",
        "title" => "Attandance"
    ]);
});

Route::get('/listabsen', function () {
    return view('pages.absen.listabsen',  [
        "page" => "listabsen",
        "title" => "Employee Schedule"
    ]);
});

Route::get('/report', function () {
    return view('pages.report.report',  [
        "page" => "absen"
    ]);
});

Route::get('/permission', function () {
    return view('pages.user.permission',  [
        "page" => "permission",
        "title" => "Permission"
    ]);
});

Route::get('/userlist', function () {
    return view('pages.user.userlist',  [
        "page" => "userlist",
        "title" => "User List"
    ]);
});

Route::get('/assetusagedata', function () {
    return view('pages.asset.assetusagedata',  [
        "page" => "assetusagedata",
        "title" => "Asset Usage"
    ]);
});

Route::get('/bill', function () {
    return view('pages.asset.bill',  [
        "page" => "bill",
        "title" => "Bill"
    ]);
});

Route::get('/calendaradd', function () {
    return view('pages.calendar.calendaradd',  [
        "page" => "calendaradd",
        "title" => "Input Schedule"
    ]);
});

Route::get('/listasset', function () {
    return view('pages.asset.listasset',  [
        "page" => "listasset",
        "title" => "Asset List"
    ]);
});

Route::get('/role', function () {
    return view('pages.user.role',  [
        "page" => "role",
        "title" => "Role"
    ]);
});

Route::get('/useasset', function () {
    return view('pages.asset.useasset',  [
        "page" => "useasset",
        "title" => "Use Asset"
    ]);
});

Route::get('/assetsdetails', function () {
    return view('pages.asset.assetsdetails',  [
        "page" => "assetsdetails",
        "title" => "Asset Details"
    ]);
});

Route::get('/log', function () {
    return view('log',  [
        "page" => "log",
        "title" => "Log"
    ]);
});

Route::get('/report', function () {
    return view('pages.report.report',  [
        "page" => "report",
        "title" => "Report"
    ]);
});

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');
