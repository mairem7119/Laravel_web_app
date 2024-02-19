@extends('layouts.app')

@section('title', 'View Blog')

@section('content')
    <div class="blog-container">
        <div class="top-line">
            <h3>{{$blog->title}}</h3>
        </div>
        <div class="view-blog-img">
            <img src="{{asset($blog->image_path)}}" alt="">
        </div>
        <div class="view-blog-content">
            <span>{{$blog->blog_type}}</span>
            <p>{{$blog->content}}</p>
        </div>
        <div class="back-btn">
            <a href="/blog"><i class="fas fa-arrow-left"></i>Go back</a>
        </div>
    </div>
    
@endsection