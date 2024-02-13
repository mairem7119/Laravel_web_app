@extends('layouts.app')

@section('title', 'Create blog')

@section('content')
    <div class="container-blog">
        <form action="/blog" method="POST">
            <div class="cover-blog">
                <h3>Create a new Blog</h3>
                <div class="create-blog-title">
                    <input class="input-group" type="text" placeholder="Your blog title">
                </div>
                <div class="dropdown-type-blog">
                    <select class="input-group" name="category">
                        <option value="1">Technology</option>
                        <option value="2">Nature</option>
                        <option value="3">Language</option>
                        <option value="4">Vaction</option>
                    </select>
                </div>
                <div class="create-blog-content">
                    <textarea class="input-group" name="content" rows="4" cols="50" placeholder="Your blog content">
                        Your blog content
                    </textarea>
                </div>
                {{-- <div class="upload-blog-image">
                    <label for="blog-image">Upload Image:</label>
                    <input type="file" id="blog-image" name="image" accept="image/*">
                </div> --}}
                <div class="blog-btn">
                    <button type="submit">Submit your Blog</button>
                </div>
            </div>
        </form>
    </div>
@endsection
