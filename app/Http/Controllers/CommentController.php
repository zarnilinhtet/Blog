<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Blog $wildcard)
    {

        // dd(request('body'));
        request()->validate([
            'body' => 'required'
        ]);
        //comment store
        $wildcard->comments()->create([
            'body' => request('body'),
            'user_id' => auth()->id()
        ]);
        return back();
    }
}
