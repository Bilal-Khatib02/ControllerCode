<?php

use App\Http\Controllers\TestSite;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::get('/', function(){
//     return 'Home';
// });

// Route::get('/Id/{id}', function($id){
//     return 'ID: ' . $id;
// })->whereNumber('id');

// Route::get('/name/{name}', function($name){
//     return 'Your Name: ' . $name;
// })->whereAlpha('name');

// Route::get('/profile/{name}/{id}/{college}', function($name, $id, $college){
//     return 'Your Name: ' . $name . '<br> Your ID: ' . $id . '<br> Your College: ' . $college;
// })->whereAlpha('name')->whereNumber('id')->whereAlphaNumeric('college');

// Route::get('/about/{course}/{type?}', function($course , $type = ''){
//     if($type){
//       return 'Course: ' . $course . ' Type: ' . $type;
//     }else{
//       return 'Course: ' . $course;
//     }
// })->whereAlpha('course' ,'type');

// 1
// Route::get('/our-teams', function () {
//      return 'Teams';
// })->name('team page');

// //2
// //$page = 'admin';
// // Route::get($page . ' about', function() {})->name($page. '.about');
// // Route::get($page . ' name', function() {})->name($page. '.name');
// // Route::get($page . ' role', function() {})->name($page. '.role');
// // Route::get($page . ' us', function() {})->name($page. '.us');

// Route::prefix('admin')->name('admin.')->group(function() {
//     Route::get('/post', function() {})->name('post');
//     Route::get('/about', function() {})->name('about');
//     Route::get('/name', function() {})->name('name');
//     Route::get('/age', function() {})->name('age');
// });

// Route::get('/', [TestSite::class, 'home'])->name('site.home');
// Route::get('/about', [TestSite::class, 'about'])->name('site.about');
// Route::get('/posts', [TestSite::class, 'posts'])->name('site.posts');
// Route::get('/product', [TestSite::class, 'product'])->name('site.product');

// Route::prefix('')->name('site.')->group(function (){
//     Route::get('/', [TestSite::class, 'home'])->name('home');
//     Route::get('/about', [TestSite::class, 'about'])->name('about');
//     Route::get('/posts', [TestSite::class, 'posts'])->name('posts');
//     Route::get('/product', [TestSite::class, 'product'])->name('product');
// });

Route::resource('posts', TestSite::class);

Route::get('/home',function()
{
   return 'Hello';
});
