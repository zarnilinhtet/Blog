 <!-- navbar -->
 <nav class="navbar navbar-dark bg-dark">
     <div class="container">
         <a class="navbar-brand" href="/">LARAVEL BLOG</a>
         <div class="d-flex">
             <a href="/" class="nav-link">Home</a>
             <a href="/#blogs" class="nav-link">Blogs</a>
             @guest
                 <a href="/register" class="nav-link">Register</a>
                 <a href="/login" class="nav-link">Login</a>
             @else
                 <img src="{{ auth()->user()->avatar }}" alt="" width="40" height="40"
                     class="rounded-circle">
                 <a href="/register" class="nav-link">Welcome {{ auth()->user()->name }}</a>
                 <form action="/logout" method="POST">
                     @csrf
                     <button class="nav-link btn btn-link" type="submit">Logout</button>
                 </form>
             @endguest


         </div>
     </div>
 </nav>
