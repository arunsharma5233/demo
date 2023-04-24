
<?php

use App\Models\Categories;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
 use Illuminate\Support\Facades\Route;
// use Spatie\YamlFrontMatter\YamlFrontMatter;

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




Route::get('/', function () {
    \Illuminate\Support\Facades\DB::listen(function($query){
        logger($query->sql);
    });
    
    return view('posts',[
        'posts' => Post::latest()->get(),
        'categories' =>Category::all()

    ]);
});

Route::get('posts/{post:slug}', function(Post $post) {

       // $post = Post::findOrFail($id);
        return view("post", [
            'post' =>  $post                           //Post::findOrFail($id)
        ]);

});
Route::get('/categories/{category:slug}', function(Category $category){
    return view('posts',[
        'posts' =>$category->posts,//->load(['category','author'])
        'currentCategory'=>$category,
        'categories' =>Category::all()
    ]);
    
});

Route::get('/authors/{author:username}', function(User $author)
{
    
    return view('posts',[
        'posts' =>$author->posts,//->load(['category','author'])
        'categories' =>Category::all()
    ]);
    
});



