<?php

use App\Http\Controllers\ContentController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ContentController::class, 'welcome']);

Route::get('/kontakt', function () {
    return view('contact');
});


Route::get('/kurzy', [ContentController::class, 'courses']);
Route::get('/kurzy/{id}', [ContentController::class, 'course']);

Route::get('/clanky/{id}', [ContentController::class, 'article'])->name('articles');
Route::get('/spoluprace/{id}', [ContentController::class, 'coop']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/phpinfo', function() {
    return phpinfo();
});

Route::post('/send', [ContentController::class, 'sendMail']);
