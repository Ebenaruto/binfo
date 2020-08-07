@extends('layouts.nav')
@section('content')
   <body>
   
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
                                       
                                        <a href="#"><img src="img/core-img/calendar2.png" alt="">Publié {{$actualite->created_at}}</a>
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
@endsection