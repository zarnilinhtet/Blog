<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminBlogController extends Controller
{
    public function index()
    {
        return view('admin.blogs.index', [
            'blogs' => Blog::latest()->paginate(3)
        ]);
    }

    public function create()
    {
        //custom middle create yan
        return view('admin.blogs.create', [
            'categories' => Category::all()
        ]);
    }

    public function store()
    {

        $formData =  request()->validate([
            "title" => ['required'],
            "intro" => ['required'],
            "slug" => ['required', Rule::unique('blogs', 'slug')],
            "body" => ['required'],
            "category_id" => ['required', Rule::exists('categories', 'id')]
        ]);
        $formData['user_id'] = auth()->id();
        $formData['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        Blog::create($formData);
        return redirect('/');
    }

    //Delete
    public function destory(Blog $blog)

    {
        // dd($blog_delete);
        $blog->delete();
        return back();
    }

    //Edit
    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', [
            'blog' => $blog,
            'categories' => Category::all()
        ]);
    }
    public  function update(Blog $blog)
    {
        $formData =  request()->validate([
            "title" => ['required'],
            "intro" => ['required'],
            "slug" => ['required', Rule::unique('blogs', 'slug')->ignore($blog->id)],
            "body" => ['required'],
            "category_id" => ['required', Rule::exists('categories', 'id')]
        ]);
        $formData['user_id'] = auth()->id();

        $formData['thumbnail'] = request()->file('thumbnail') ?
            request()->file('thumbnail')->store('thumbnails') : $blog->thumbnail;

        $blog->update($formData);
        return redirect('/')->with('success', 'Blog Update Successfully');
    }
}
