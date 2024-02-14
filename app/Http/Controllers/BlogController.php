<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use Illuminate\Http\Request;
use App\Models\Blog;


class BlogController extends Controller
{
    public function CreateBlog(BlogRequest $request){

        $userInput = $request->only('title', 'blogType', 'content');
        try {
            $blog = new Blog();
            $blog->title = $userInput['title'];
            $blog->blog_type = $userInput['blogType'];
            $blog->content = $userInput['content'];
            $blog->user_id = auth()->id();
            $blog->save();
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['message' => 'An error occurred while creating the blog']);
        }
        
        return redirect()->route('blog')->with('success', 'Blog is created successfully');
    }

    
}
