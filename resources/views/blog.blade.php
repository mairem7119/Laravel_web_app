@extends('layouts.app')

@section('title', 'blog')

@section('content')
    <div class="container">
        <div class="head-img">
            <div class="background-overlay"></div>
            <div class="head-line">
                <h3>Hello world</h3>
                <p>Rikkeisoft Co., Ltd. is an offshore development company based in Vietnam.
                 They are known for providing software development services to over 500 trusted partners worldwide. </p>
            </div>
        </div>
        <div class="search-bar">
            {{-- <div>
                <input type="text" class="input-search">
            </div>
            <div>
                <div class="dropdown">
                    <button class="dropbtn">Industries</button>
                    <div class="dropdown-content">
                      <a href="#">Option 1</a>
                      <a href="#">Option 2</a>
                      <a href="#">Option 3</a>
                    </div>
                  </div>
            </div>
            <div>
                <div class="dropdown">
                    <button class="dropbtn">Services</button>
                    <div class="dropdown-content">
                      <a href="#">Option 1</a>
                      <a href="#">Option 2</a>
                      <a href="#">Option 3</a>
                    </div>
                  </div>
            </div> --}}
            <a class="search-btn" href="/createBlog" onclick="createBlog()">
                <i class="fas fa-plus" style="margin-right: 10px"></i>Create new blog</a>
        </div>
        <div class="title-blog">
            <h1>Content</h1>
        </div>
        <div class="blog-list">
            @foreach ($blogs as $blog)
            <div class="card">
                <div class="blog-img">
                    <img src="{{$blog->image_path}}" alt="">
                </div>
                <div class="blog-content">
                    <span>{{$blog->blog_type}}</span>
                    <h4>{{$blog->title}}</h4>
                    <p>{{$blog->content}}</p>
                </div>
                <div class="action-btn">
                    <button class="update-btn">
                        <a href="{{ route('updateBlog', ['id' => $blog->id]) }}" >Update</a>
                    </button>
                    <button class="view-btn">
                        <a href="{{ route('viewBlog', ['id' => $blog->id]) }}">View</a>
                    </button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    {{-- <script>
        document.addEventListener("DOMContentLoaded", function(event) { 
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var buttons = document.getElementsByClassName("dropbtn");

            for (var i = 0; i < buttons.length; i++) {
                buttons[i].onclick = function() {
                var dropdown = this.nextElementSibling;
                dropdown.classList.toggle("show");
                }
            }

            window.onclick = function(event) {
                if (!event.target.matches('.dropbtn')) {
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                    }
                }
                }
            }
            });

    </script> --}}
    <script>
        function createBlog(){
            @if (Auth::check())
                window.location.href = "{{ route('createBlog') }}";
            @else
                alert("You need to login to create a Blog");
            @endif
        }
    </script>
@endsection