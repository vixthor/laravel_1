<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

/*
    GET - Rewuest a resource
    POST - create a new resource
    PUT - Update a resource
    PATCH - modify a resource
    Delete - Delete a resource
    OPTIONS - ASk the server which verbs are allowed
*/

Route::prefix('/blog')->group(function () {
    Route::get('/', [PostsController::class, 'index'])->name('blog.index');
    Route::get('/{id}', [PostsController::class, 'show'])->name('blog.show');
    Route::get('/create', [PostsController::class, 'create'])->name('blog.create');
    Route::post('/{id}', [PostsController::class, 'store'])->name('blog.store');
    Route::get('/edit/{id}', [PostsController::class, 'edit'])->name('blog.edit');
    Route::patch('/{id}', [PostsController::class, 'update'])->name('blog.update');
    Route::delete('/{id}', [PostsController::class, 'destroy'])->name('blog.destroy');
});
// GET


// POST



// UPDATE



// DELETE



// Route::resource('blog', PostsController::class);

//route for invoke method

Route::get('/', HomeController::class);

//return a view
// Route::view('/blog', 'blog.index', ['name' => 'code with me']);