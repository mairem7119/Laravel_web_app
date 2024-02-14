@extends('layouts.app')

@section('title', 'Create blog')

@section('content')
    <div class="container-blog">
        <form action="{{route('createBlog')}}" method="POST">
            @csrf
            <div class="cover-blog">
                <h3>Create a new Blog</h3>
                <div class="create-blog-title">
                    <input class="input-group" name="title" type="text" placeholder="Your blog title">
                    @error('title')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="dropdown-type-blog">
                    <select class="input-group" name="blogType">
                        <option value="technology">Technology</option>
                        <option value="nature">Nature</option>
                        <option value="language">Language</option>
                        <option value="vaction">Vaction</option>
                    </select>
                </div>
                <div class="create-blog-title">
                    <input class="input-group" name="imageUrl" type="text" placeholder="Your image url">
                    @error('imageUrl')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class='create-blog-content'> 
                    <textarea placeholder="Enter some text..." name="content"></textarea> 
                     @error('content') 
                        <div class="error">{{ $message }}</div>
                     @enderror 
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
