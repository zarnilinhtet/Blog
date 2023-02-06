<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BlogController extends Controller
{
    public function index()
    {

        return view('blogs.index', [
            // 'firstblog'=>Blog::with('category','author')->get() (N+1)
            'firstblog' => Blog::latest()->filter(request(['search', 'category', 'username']))->get(),

        ]);
    }

    public function show(Blog $wildcard)
    {
        return view('blogs.show', [
            'secondblog' => $wildcard,
            'random' => Blog::inRandomOrder()->take(3)->get()
        ]);
    }



    // protected function getblogs(){
    //     $blog= Blog::latest();
    //     if (request('search')) {
    //        $blog= $blog->where('title','LIKE','%'.request('search').'%')
    //                    ->orWhere('body','LIKE','%'.request('search').'%');
    //     }
    //     return $blog->get();
    // }
    //OR
    //  protected function getblogs(){
    //     $query= Blog::latest();
    //         $query->when(request('search'),function($query,$search){
    //            $query->where('title','LIKE','%'.$search.'%')
    //                            ->orWhere('body','LIKE','%'.$search.'%');
    //         });
    //     return $query->get();
    // }
    // OR

}
