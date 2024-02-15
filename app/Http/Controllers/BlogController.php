<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use Illuminate\Http\Request;
use App\Models\Blog;


class BlogController extends Controller
{
    public function showBlog(){
        $blogs = Blog::get()->all();

        return view('blog', compact('blogs'));
    }

    public function createBlog(BlogRequest $request){

        $userInput = $request->only('title', 'blogType','imageUrl', 'content');
        try {
            $blog = new Blog();
            $blog->title = $userInput['title'];
            $blog->blog_type = $userInput['blogType'];
            $blog->image_path = $userInput['imageUrl'];
            $blog->content = $userInput['content'];
            $blog->user_id = auth()->id();
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time().'.'.$image->extension(); // Tạo tên cho ảnh dựa trên thời gian
                $image->move(public_path('images'), $imageName); // Lưu ảnh vào thư mục public/images
        
                $blog->image_path = 'images/'. $imageName;
            }
            dd($blog);
            $blog->save();
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['message' => 'An error occurred while creating the blog']);
        }
        
        return redirect()->route('blog')->with('success', 'Blog is created successfully');
    }

    
}
