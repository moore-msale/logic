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

Route::get('/', function () {
    return view('welcome',
        ['clients' => \App\Client::all(),
            'partners' => \App\Partner::all(),
            'news' => \App\News::all()->reverse()->take(3),
            'projects' => \App\Project::all()->reverse()->take(4),
            'content' => \App\Mainpage::all()->first(),
        ]);
});
Route::post('/mail', 'MailController@mail')->name('mail');

Route::get('about_us', function () {
   return view('about_us',
       ['content' => \App\About::all()->first()]
       );
});

Route::get('team', function () {
   return view('team',
       [
           'content' => \App\Team::all()->first(),
           'vacancies' => \App\Vacancy::all(),
       ]);
});

Route::get('news', function () {
    return view('news',['news' => \App\News::all()]);
});
Route::get('news2', function () {
    return view('news2');
})->name('news2');

Route::get('projects', function () {
    return view('projects',['projects' => \App\Project::all()->reverse()]);
});

Route::get('/project_page', 'ProjectController@index')->name('project_page');

Route::get('/news_page', 'NewsController@index')->name('news_page');

Route::group(['prefix' => 'moo'], function () {
    Voyager::routes();
});
