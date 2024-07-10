<?php

use Illuminate\Support\Facades\Route;

// the default welcome route.
// Route::get('/', function () {
//     return view('welcome');
// });

//the home route.
Route::get('/', function () {
    return view('home');
});

//the about route.
Route::get('about', function () {
    return view('about');
});

//admin home route page.
Route::get('admin/home', function () {
    return view('admin.home');
});

//customer home route page.
Route::get('customer/home', function () {
    return view('customer.home');
});

//customer sub about route page.
Route::get('customer/sub/about', function(){
    return view('customer.sub.about');
});

// Route parameters.
Route::get('customer/contact/{myName}/{myLevel}', function($myName, $myLevel){
    // return view('contact', ['myName' => $myName, 'myLevel' => $myLevel]);
    return view('customer.contact', compact('myName','myLevel')); //using the compact function is a more easier way of doing it.
}) -> where(['myName' => '[a-zA-Z]+','myLevel' => '[0-9]+']); //the where keyword sets a condition for the myLevel parameter(can only take in integers as parameters) and myName parameter(can only take in string values).


Route::get('conditional-statements/test', function(){
    $country = "Ghana";
    $city = "Kumasi";

    return view('conditional-statements.test', compact('country', 'city'));
});













//RESOURCEFUL ROUTES!!
//This automatically maps to a set of crud actions of a resource.
// Route::resource('articles', 'ArticleController'); //the first parameter is the main route name and the second parameter name is the controller name.

//with the controller name, we can map a set of routes responsible for crud operations.
// Route::get('articles', [ArticleController::class, 'index']) -> name('articles.index');
// Route::get('articles/create', [ArticleController::class, 'create']) -> name('articles.create');
// Route::post('articles/store', [ArticleController::class, 'store']) -> name('articles.store');
// Route::get('articles/{article}', [ArticleController::class, 'show']) -> name('articles.show'); //the show takes a parameter article that is single article to be shown.
// Route::get('articles/{article}/edit', [ArticleController::class, 'edit']) -> name('articles.edit'); //takes a parameter. the article you want to edit and the new edited article.
// Route::put('articles/{article}', [ArticleController::class, 'update']) -> name('articles.update');
// Route::patch('articles/{article}', [ArticleController::class, 'update']);
// Route::delete('articles/{article}', [ArticleController::class, 'delete']) -> name('articles.delete');

