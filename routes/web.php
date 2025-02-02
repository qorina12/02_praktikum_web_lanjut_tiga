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

// No. 1
Route::get('/', function () {
    return redirect('https://www.educastudio.com');
});

// No. 2 (route prefix)
Route::prefix('/product')->group(function () {
    Route::get('/marbel-edu-games', function () {
        return redirect('https://www.educastudio.com/category/marbel-edu-games');
    });
    Route::get('/marbel-and-friends-kids-games', function () {
        return redirect('https://www.educastudio.com/category/marbel-and-friends-kids-games');
    });
    Route::get('/riri-story-books', function () {
        return redirect('https://www.educastudio.com/category/riri-story-books');
    });
    Route::get('/kolak-kids-songs', function () {
        return redirect('https://www.educastudio.com/category/kolak-kids-songs');
    });
});

// No. 3 (route param)
Route::get('/news', function () {
    return redirect('https://www.educastudio.com/news');
});
Route::get('/news/{id}', function ($id) {
    return 'https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19 '.$id;
});

// No. 4 (route prefix)
Route::prefix('/program')->group(function () {
    Route::get('/karir', function () {
        return redirect('https://www.educastudio.com/program/karir');
    });
    Route::get('/magang', function () {
        return redirect('https://www.educastudio.com/program/magang');
    });
    Route::get('/kunjungan-industri', function () {
        return redirect('https://www.educastudio.com/program/kunjungan-industri');
    });
});

// No. 5 (route biasa)
Route::get('/about-us', function () {
    return redirect('https://www.educastudio.com/about-us');
});

// No. 6 (route resource only)
Route::resource('/contact-us', ContactController::class)->only(['index']);