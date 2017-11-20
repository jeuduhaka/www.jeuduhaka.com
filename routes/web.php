<?php

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

Route::get('/', ['as' => 'home', function () {
    return view('home');
}]);

Route::get('/auteurs', ['as' => 'auteurs', function () {
    return view('auteurs');
}]);

Route::get('/definition-haka-faire', ['as' => 'definition-haka-faire', function () {
    return view('definition-haka-faire');
}]);

Route::get('/photos', ['as' => 'photos', function () {
    return view('photos');
}]);

Route::get('/videos', ['as' => 'videos', function () {
    return view('videos');
}]);

Route::get('/download-ludocoach', function () {
    return redirect('application');
});

Route::get('/application', function () {
    return view('download-ludocoach');
});

Route::get('/application/{locale}', function ($locale) {
    App::setLocale($locale);

    return view('download-ludocoach');
})->where([
    'locale' => '[a-z]{2}',
]);

//for legacy links
Route::get('/gift/', function () {
    if (!($cardName = Request::get('name')) || !Lang::has('gift.' . $cardName)) {
        return Redirect::route('home');
    }

    return view('gift-card', [
        'cardName' => $cardName
    ]);
});


$giftViewFunc = function ($locale, $cardName) {
    if (!Lang::has('gift.' . $cardName)) {
        return Redirect::route('home');
    }

    App::setLocale($locale);

    return view('gift-card', [
        'cardName' => $cardName
    ]);
};

$giftViewParamsRegexArray = [
    'locale' => '[a-z]{2}',
    'cardName' => '[a-z]+',
];

Route::get('/gift/{locale}/{cardName}', ['as' => 'gift', $giftViewFunc])->where($giftViewParamsRegexArray);
Route::get('/gift/newyear/{locale}/{cardName}', ['as' => 'giftnewyear', $giftViewFunc])->where($giftViewParamsRegexArray);



