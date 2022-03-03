<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::redirect('/', 'https://www.educastudio.com/');

Route::prefix('Daftar Product')->group(function () {
Route::redirect('/marbel-edu-games', 'https://www.educastudio.com/category/marbel-edu-games');
Route::redirect('/marbel-and-friends-kids-games', 'https://www.educastudio.com/category/marbel-and-friends-kids-games');
Route::redirect('/riri-story-books', 'https://www.educastudio.com/category/riri-story-books');
Route::redirect('/kolak-kids-songs', 'https://www.educastudio.com/category/kolak-kids-songs');
    });

    
    Route::get('/DaftarBerita/{id}', function ($id=1) {
        return redirect()->route('NewsBerita');
        });
    Route::get('/BeritaCovid19/{id}', function ($id=2) {
        return redirect()->route('NewsCovid');
         }); 
        Route::redirect('/', 'https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19')
        ->name('NewsCovid');
        Route::redirect('/', 'https://www.educastudio.com/news')
        ->name('NewsBerita');


Route::prefix('DaftarProgram')->group(function () {
Route::redirect('/karir', 'https://www.educastudio.com/program/karir');
Route::redirect('/magang', 'https://www.educastudio.com/program/magang');
Route::redirect('/kunjungan-industri', 'https://www.educastudio.com/program/kunjungan-industri');
});

Route::redirect('/about-us', 'https://www.educastudio.com/about-us');

Route::resource('Contact', ContactController::class)->only([
    'index'
    ]);