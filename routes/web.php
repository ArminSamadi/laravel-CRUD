<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;


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

Route::resource('post','App\Http\Controllers\PostController');
