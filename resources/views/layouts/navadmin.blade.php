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
    <link rel="stylesheet" href="/style.css">
    

</head>

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
                            <a href="#"><img src="/img/bg-img/add.png" alt=""></a>
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
                                    <li class="active"><a href="/">Accueil</a></li>
                                    <li><a href="/rubriques/politique">Politique</a></li>
                                    <li><a href="/rubriques/economie">Economie</a></li>
                                    <li><a href="/rubriques/societe">Société</a></li>
                                    <li><a href="/rubriques/cooperation">Coopération</a></li>
                                    <li><a href="/rubriques/culture">Culture</a></li>
                                    <li><a href="#">Internationale</a></li>
                                     <li><a href="/admin/enregistrer">Ajouter une Actualité</a></li>
                                    {{-- <li><a href="contact.html">Contact</a></li>  --}}
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

 @yield('content')
<!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="/js/active.js"></script>
</body>

</html>