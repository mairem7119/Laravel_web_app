<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use Illuminate\Http\Request;
use App\Models\Blog;
use Exception;
use PhpParser\Node\Stmt\TryCatch;

class BlogController extends Controller
{
    public function showAllBlog(){
        $blogs = Blog::get()->all();

        return view('blog', compact('blogs'));
    }

    public function createBlog(BlogRequest $request){

        $userInput = $request->only('title', 'blogType','imageUrl', 'content');
        try {
            $blog = new Blog();
            $blog->title = $userInput['title'];
            $blog->blog_type = $userInput['blogType'];
            $blog->content = $userInput['content'];
            $blog->user_id = auth()->id();
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time().'.'.$image->extension(); // Tạo tên cho ảnh dựa trên thời gian
                $image->move(public_path('images'), $imageName); // Lưu ảnh vào thư mục public/images
                $blog->image_path = 'images/'. $imageName;
            }
            $blog->save();
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['message' => 'An error occurred while creating the blog']);
        }
        
        return redirect()->route('blog')->with('success', 'Blog is created successfully');
    }

    public function showBlog($id){

        $blog = Blog::find($id);
       
        if($blog){
            return view('viewBlog', compact('blog'));
        }else{
           return redirect()->back()->withInput()->withErrors(['message' => 'An error occurred while viewing the blog']);
        }
    }

    public function updateBlog($id){
        $blog = Blog::find($id);
        if($blog){
            $blog_type = $blog->blog_type;
            return view('updateBlog', compact('blog', 'blog_type'));
        }else{
            return redirect()->back()->withInput()->withErrors(['message' => 'An error occurred while go to the update blog page']);
        }
        
    }
    
}
