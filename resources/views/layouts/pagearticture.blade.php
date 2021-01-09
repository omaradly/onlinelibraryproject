<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="features">
        <meta name="keywords" content="html,css">
        <meta name="viewport" content="width=device-width,initial-Scale=1.0">
        <title>@yield('title')</title>
        {{-- icon --}}
        <link rel="icon"  href="{{asset('images/icons/bookmark-regular-svg.svg')}}">
        <!--    bootstrap    -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     
        {{-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"> --}}
        <!--   end import     -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">  
        {{-- css page --}}
           <link rel="stylesheet" href="{{asset('css/pagearticture.css')}}">
           @yield('style')
    </head>
    <body>
    
        <nav class="navbar navbar-expand-lg navbar-light navbarbg py-3 fixed-top shadow-lg">
            <div class="container">
            <a class="navbar-brand font-weight-bold" href="#">
                <i class="far fa-bookmark"></i>
                ONLINE LIBRARY
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
              <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item  active">
                  <a class="nav-link" href="{{route('homepage')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{route('books.showall')}}">Books <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{route('Category.showallCateogries')}}">Categories</a>
                </li>
              {{-- users --}}
              @guest
              <li class="nav-item ">
                <a class="nav-link  " href="{{route('auth.login')}}">login </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="{{route('auth.register')}}">register </a>
              </li>
              @endguest
              @auth
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-body" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-user mr-2"></i>{{Auth::user()->name}}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="nav-link " href="{{route('auth.logout')}}">logout</a>
                  <a class="nav-link " href="{{route('auth.updatedata')}}">Update Profile</a>
                </div>
              </li>
              
             
              @endauth
              </ul>
            
            </div>
        </div>    
          </nav>
        @yield('content')
     {{-- footer --}}
     <footer class="navbarbg text-light text-center p-5">
         <h4>&copy; design in 2020</h4>
     </footer>
      <!-- btn for scroll up -->
        <div class="btn-up">
        <a class="btn btn-danger toup"><i class="fas fa-arrow-circle-up"></i></a>
        </div>
      <!-- end of scroll -->
     
        <!--    bootstrap    -->
        <script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
 
         <!--   end import     -->
         <script src="{{asset('js/main.js')}}"></script>
        @yield('script')
    </body>
</html>