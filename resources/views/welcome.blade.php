
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Faso Magasine</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>
 <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                   
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container-fluid h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 col-sm-4">
                        <!-- Logo Area -->
                        <div class="logo-area">
                            <a href="index.html">FASO MAG</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-8">
                        <!-- Top Add Area -->
                        <div class="top-add-area text-right">
                            <a href="#"><img src="img/bg-img/add.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="videomag-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="container-fluid">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="videomagNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="/">Accueil</a></li>
                                    <li><a href="/rubriques/politique">Politique</a></li>
                                    <li><a href="/rubriques/economie">Economie</a></li>
                                    <li><a href="/rubriques/societe">Société</a></li>
                                    <li><a href="#">Coopération</a></li>
                                    <li><a href="#">Culture</a></li>
                                    <li><a href="#">Internationale</a></li>
                                    <li><a href="contact.html">Contact</a></li> 
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Top Search Area -->
                        {{-- <div class="top-search-area">
                            <form action="#" method="post">
                                <input type="search" name="top-search" id="topSearch" placeholder="Search">
                                <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div> --}}
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <div class="hero-area d-flex flex-wrap">

        <div class="hero-single-section">
            <!-- Single Welcome Post -->
            <div class="single-welcome-post bg-img item1 wow fadeInUp" data-wow-delay="300ms" style="background-image: url(img/bg-img/1.jpg);">
                <!-- Play Button -->
                <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn"><i class="fa fa-play"></i></a>
                <!-- Content -->
                <div class="welcome-post-content">
                    <!-- Single Blog Post -->
                    <div class="single-blog-post white">
                        <div class="blog-content">
                            <a href="#" class="post-tag">Featured</a>
                            <a href="#" class="post-title">Watch a tiny cat taking a bath</a>
                            <div class="post-meta">
                                <a href="#"><img src="img/core-img/author.png" alt=""> By James Smith</a>
                                <a href="#"><img src="img/core-img/calender.png" alt=""> July 23, 2018</a>
                                <a href="#"><img src="img/core-img/chat.png" alt=""> 5</a>
                                <a href="#"><img src="img/core-img/like.png" alt=""> 12k</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hero-single-section">
            <!-- Single Welcome Post -->
                         
           
            <div class="single-welcome-post bg-img item2 wow fadeInUp" data-wow-delay="400ms" style="background-image: url(img/bg-img/2.jpg);">
                <!-- Content -->
                <div class="welcome-post-content">
                    <!-- Single Blog Post -->
                    <div class="single-blog-post white">
                        <div class="blog-content">
                        <a href="#" class="post-tag">jfnrejj</a>
                        <p>paragraphe</p>
                            <div class="post-meta">
                                <a href="#"><img src="img/core-img/author.png" alt=""> By James Smith</a>
                                <a href="#"><img src="img/core-img/calender.png" alt=""> July 23, 2018</a>
                                <a href="#"><img src="img/core-img/chat.png" alt=""> 5</a>
                                <a href="#"><img src="img/core-img/like.png" alt=""> 12k</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hero-second-section d-flex flex-wrap">
                <!-- Single Welcome Post -->
                <div class="single-welcome-post bg-img item3 wow fadeInUp" data-wow-delay="500ms" style="background-image: url(img/bg-img/3.jpg);">
                    <!-- Content -->
                    <div class="welcome-post-content">
                        <!-- Single Blog Post -->
                        <div class="single-blog-post style2 white">
                            <div class="blog-content">
                                <a href="#" class="post-tag">Featured</a>
                                <a href="#" class="post-title">5 Tips to create your garden</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Welcome Post -->
                <div class="single-welcome-post bg-img item4 wow fadeInUp" data-wow-delay="600ms" style="background-image: url(img/bg-img/4.jpg);">
                    <!-- Content -->
                    <div class="welcome-post-content">
                        <!-- Single Blog Post -->
                        <div class="single-blog-post style2 white">
                            <div class="blog-content">
                                <a href="#" class="post-tag">Featured</a>
                                <a href="#" class="post-title">10 Movies you need to see</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
 @foreach ($actualites as $actualite)
    <!-- ##### Travel Videos Area Start ##### -->
    <section class="travel-videos-area">
        <div class="container">
            <div class="travel-videos-content">
                <div class="row">
                    <div class="col-12">
                        
                        


                               
                                    
                                
                            <!-- Single Blog Post -->
                            <div class="col-md-4">
                                <div class="single-blog-post style3 mb-30 wow fadeInUp" >

                                    <div class="blog-content">
                                        <a href="#" class="post-title">{{$actualite->Titre}}</a>
                                    </div>
                                    <div class="post-meta flex-column justify-content-between">
                                         
                                        <img src="{{asset('storage/' . $actualite->photo)}}" alt="" width="800" class="rounded">
                                        <!-- Play Button -->
                                        <p class="border-bottom">{{$actualite->Contenu}}<br><a href="" class="text-primary">lire la suite</a></p>
                                       
                                    </div>
                                    <div class="post-meta d-flex justify-content-between">
                                
                                    </div>
                                   
                                    <div class="blog-content">
                                        
                                    
                                     
                                        <div class="post-meta d-flex justify-content-between">
                                       
                                        <a href="#"><img src="img/core-img/calendar2.png" alt="">{{$actualite->created_at}}</a>
                                            <div class="d-flex">
                                         </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                       

                    </div>
                </div>
            </div>
        </div>
    </section>
     @endforeach
    <!-- ##### Travel Videos Area End ##### -->

    
    <!-- ##### Small Videos Area End ##### -->

   


    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area section-padding-100">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <!-- Footer Content -->
                <div class="col-12 col-lg-4">
                  
                </div>
                <!-- Footer Content -->
                <div class="col-12 col-lg-7 col-xl-6">
                    <div class="footer-content d-flex flex-wrap">
                        <!-- Footer Nav -->
                        <div class="footer-nav">
                            <h5 class="widget-title">Usefull Links</h5>
                            <nav>
                                <ul>
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Travel</a></li>
                                    <li><a href="#">Games</a></li>
                                    <li><a href="#">Categories</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                </ul>
                            </nav>
                        </div>

                        <!-- Footer Nav -->
                        <div class="footer-nav">
                            <h5 class="widget-title">About Us</h5>
                            <nav>
                                <ul>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Jobs</a></li>
                                    <li><a href="#">Terms</a></li>
                                    <li><a href="#">Conditions</a></li>
                                    <li><a href="#">About</a></li>
                                </ul>
                            </nav>
                        </div>

                        <!-- Video Catagory -->
                      
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Copywrite Text -->
                    <p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>