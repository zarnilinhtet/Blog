<?php

use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

use App\Models\User;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use PharIo\Manifest\AuthorCollection;

Route::get('/', [BlogController::class, 'index']);

Route::get('/firstblog/{wildcard:slug}', [BlogController::class, 'show'])->where('blog', '[A-z\d\-_]+');

//Login Logout Register
Route::get('/register', [AuthController::class, 'create'])->middleware('guest');
Route::post('/register', [AuthController::class, 'store'])->middleware('guest');


Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/login', [AuthController::class, 'login'])->middleware('guest');
Route::post('/login', [AuthController::class, 'data_login'])->middleware('guest');

//Comment
Route::post('/firstblog/{wildcard:slug}/comments', [CommentController::class, 'store']);

//Admin
Route::get('/admin/blogs', [AdminBlogController::class, 'index'])->middleware('admin');
Route::get('/admin/blogs/create', [AdminBlogController::class, 'create'])->middleware('admin');
Route::post('/admin/blogs/store', [AdminBlogController::class, 'store'])->middleware('admin');

//Delete
Route::delete('/admin/blogs/{blog:slug}/delete', [AdminBlogController::class, 'destory'])->middleware('admin');

//edit
Route::get('/admin/blogs/{blog:slug}/edit', [AdminBlogController::class, 'edit'])->middleware('admin'); //edit ka create route nk amyal tu

Route::patch('/admin/blogs/{blog:slug}/update', [AdminBlogController::class, 'update'])->middleware('admin');






























// Route::get('/catego/{category:slug}', function (Category $category) {

//    return view('firstblog',[
//     'firstblog'=>$category->blogs,   //->load('category','author')(N+1 solution)
//     'categories'=>Category::all(),  //Filter by category
//     'currentCategory'=>$category    //Show current category
// ]);
// });

// Route::get('/users/{user:username}', function (User $user) {

//     return view('firstblog',[
//      'firstblog'=>$user->blogs,
//       //->load('category','author')(N+1 solution)
//  ]);
//  });
