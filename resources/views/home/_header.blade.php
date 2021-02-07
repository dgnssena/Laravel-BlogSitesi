<!-- Header-->
<header class="header">
    <!-- Top bar -->
    <div class="py-2 bg-dark text-white">
        <div class="container py-1">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <ul class="list-inline mb-0 text-small">
                        <li class="list-inline-item"><a class="reset-anchor" href="{{route('aboutus')}}">About us</a></li>
                        <li class="list-inline-item">|</li>
                        <li class="list-inline-item"><a class="reset-anchor" href="#">Sitemap</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 d-none d-lg-block text-center">
                    <ul class="list-inline mb-0 small">

                        <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-linkedin"></i></a></li>
                        <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-youtube"></i></a></li>
                        <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-vimeo-v"></i></a></li>
                    </ul>
                </div>



                </form>
            </div>

            <li class="nav-item mt-3 mt-lg-0">
            @auth
                <li class="nav-item dropdownmenu-right"><a href="" data-toggle="dropdown" aria-expanded="false"><b>{{ Auth::user()->name }}</b></a>
                    <ul style="">
                        <li>
                            <div class="dropdown-menu-right">
                                @include('home.usermenu')
                            </div>
                        </li>
                    </ul>
                </li>
            @endauth
            @guest
                <li class="nav-item dropdownmenu-right">
                    <a class="nav-link" href="" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login / Join </a>
                    <div class="dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('login')}}">Login</a>
                        <a class="dropdown-item" href="{{route('register')}}">Join</a>
                    </div>
                </li>
                @endguest
                </li>



            </div>
        </div>
    </div>

    <!-- Navbar 1 -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-4">
        <div class="container text-center"><a class="navbar-brand mx-auto" href="{{route('home')}}"><img class="mb-2" src="{{asset('assets')}}/img/logo.png" alt="" width="140">

                <p class="text-small text-uppercase text-gray mb-0">Your world</p></a></div>

    </nav>
    <!-- Navbar 2 -->
    <nav class="navbar navbar-expand-lg navbar-light border-gray py-2 bg-light">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right mx-auto border-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item px-1">
                        <!-- Link--><a class="nav-link active" href="{{route('home')}}">Home</a>
                    </li>

                    <li class="nav-item px-1">
                        <!-- Link--><a class="nav-link" href="post.html">Post</a>
                    </li>
                    <li class="nav-item px-1 dropdown"><a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Category</a>
                        <div class="dropdown-menu text-center text-lg-left" aria-labelledby="navbarDropdownMenuLink"><a class="dropdown-item" href="index.html">Home</a><a class="dropdown-item" href="listing.html">Listing</a><a class="dropdown-item" href="post.html">Post</a></div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


</header>
