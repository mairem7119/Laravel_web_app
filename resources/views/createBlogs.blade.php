@extends('layouts.app')

@section('title', 'Create blog')

@section('content')
    <div class="container-blog">
        <form action="{{route('createBlog')}}" method="POST" enctype="multipart/form-data">
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
                        <option value="vacation">Vacation</option>
                    </select>
                </div>
                <div class='upload-blog-image'>
                    <label for="blog-image" class="upload-btn">Upload image</label>
                    <input type='file' id='blog-image' name='image' accept='image/*' class="input-image"> 
                    @error('image')
                        <div class="error">{{ $message }}</div>
                    @enderror
                    <img id="preview-image" src="#" alt="Preview" style="display: none; max-width: 100%; margin-top: 10px;">
                </div>
                <div class='create-blog-content'> 
                    <textarea placeholder="Enter some text..." name="content"></textarea> 
                     @error('content') 
                        <div class="error">{{ $message }}</div>
                     @enderror 
                </div>
                <div class="blog-btn">
                    <button type="submit">Submit your Blog</button>
                </div>
            </div>
        </form>
    </div>
    <script>
        const input = document.getElementById('blog-image');
        const preview = document.getElementById('preview-image');
    
        input.addEventListener('change', function(event) {
            const file = input.files[0];
            const reader = new FileReader();
    
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            };
    
            reader.readAsDataURL(file);
        });
    </script>
@endsection
