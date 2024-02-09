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
            <div>
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
            </div>
            <button class="search-btn" type="submit">Search</button>
        </div>
        <div class="title-blog">
            <h1>Content</h1>
        </div>
        <div class="blog-list">
            <div class="card">
                <div class="blog-img">
                    <img src="https://plus.unsplash.com/premium_photo-1661899594118-e4730c4c9109?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </div>
                <div class="blog-content">
                    <span>Food</span>
                    <h4>Delicious Food</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Porro natus, modi non recusandae, maxime illo, vitae laudantium expedita officia asperiores animi? 
                        Eaque aut earum ipsam dignissimos modi rerum voluptatem ex?</p>
                </div>
            </div>
            <div class="card">
                <div class="blog-img">
                    <img src="https://images.unsplash.com/photo-1583530180140-e7fea169690f?q=80&w=1773&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </div>
                <div class="blog-content">
                    <span>Food</span>
                    <h4>Delicious Food</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Porro natus, modi non recusandae, maxime illo, vitae laudantium expedita officia asperiores animi? 
                        Eaque aut earum ipsam dignissimos modi rerum voluptatem ex?</p>
                </div>
            </div>
            <div class="card">
                <div class="blog-img">
                    <img src="https://images.unsplash.com/photo-1525635569544-610f9540664a?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </div>
                <div class="blog-content">
                    <span>Food</span>
                    <h4>Delicious Food</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Porro natus, modi non recusandae, maxime illo, vitae laudantium expedita officia asperiores animi? 
                        Eaque aut earum ipsam dignissimos modi rerum voluptatem ex?</p>
                </div>
            </div>
        </div>
    </div>
    <script>
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

    </script>
@endsection