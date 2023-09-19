<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{
    public function home()
    {
        return  view('home', [
            "title" => "Home",
            "active" => "home"
        ]);
    }

    // public function about()
    // {
    //     return  view('about', [
    //         "title" => "About",
    //         "active" => "about",
    //         "name" => "Muhamad Rizki Hasan",
    //         "email" => "muhamadrizkihasan@smkwikrama.sch.id",
    //         "image" => "tanjiro.jpg"
    //     ]);
    // }

    public function posts()
    {
        $title = '';
        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if(request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return  view('posts', [
            "title" => "𝓢𝓮𝓶𝓾𝓪 𝓟𝓸𝓼𝓽𝓲𝓷𝓰𝓪𝓷" . $title,
            "active" => "posts",
            // "posts" => Post::all()
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }

    public function post(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "active" => "posts",
            "post" => $post
        ]);
    }

    public function categories() 
    {
        return view('categories', [
            'title' => 'Post Categories',
            "active" => "categories",
            'categories' => Category::all()
        ]);
    }
}
