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
use App\Course;
$courses = collect([
  new Course(['title' =>'OOP','premium' => true ]),
  new Course(['title' =>'Primeros pasos con laravel','premium' => false ]),
  new Course(['title' =>'Git','premium' => true ]),
  new Course(['title' =>'Laravel 5.4','premium' => false ]),
]);
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('courses', function() use ($courses) {
  /*  $premium = $courses->filter(function($course) {
        return $course->premium;
    });
  //dd($courses,$premium);
  //reject descarta premium = true
  $free = $courses->reject(function($course) {
    return $course->premium;
  });*/
/*  //se obtiene el mismo resultado
  $premium = $courses->filter->premium;
  $free = $courses->reject->premium; */
    //se obtiene el mismo resultado con Coleciones de orden superior
  /*  $courses->map->archive();
    $premium = $courses->filter->isPremium();
    $free = $courses->reject->isPremium();*/

    //dividir 1 coleccin en dos cursos premium y free
  /*  list($premium,$free) = $courses->partition(function($course) {
      return $course->premium;
    });*/
    //es igual a colecciones de orden superior
    list($premium, $free) = $courses->partition->isPremium();


  dd($courses->toArray(), $premium->toArray(), $free->toArray());
});
