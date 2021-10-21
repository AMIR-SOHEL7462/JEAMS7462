<?php
session_start();
if(!(isset($_SESSION['email'])))
{
    header('Location: ');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/pop-up.css">
   
	
    <!-- The above meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title></title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

	<script>
    

    
    </script>
    

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

        <!-- Navbar Area -->
        <div class="mag-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="magNav">

                    <!-- Nav brand -->
                    <a href="index.html" class="nav-brand"><img style="width: 110px; height: 60px;" src="img/Nav Logo.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Nav Content -->
                    <div class="nav-content d-flex align-items-center">
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li class="active"><a href="index.html">Home</a></li>
                                    <li><a href="books.html">All Books</a></li>
                                    <li><a href="#">Catagory</a>
                                        <ul class="dropdown">
                                            <li><a href="horror.html">Horror Books</a></li>
                                            <li><a href="hist.html">Historical books</a></li>
                                            <li><a href="comic.html">Comic Books</a></li>
                                            <li><a href="drama.html">Drama Books</a></li>
                                            <li><a href="bengali.html">Bengali Books</a></li>
                                            <li><a href="Hindi.html">Hindi</a></li>
                                            <li><a href="triller.html">Thriller</a></li>
                                            <li><a href="novel.html">Novel</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Trending</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="horror.html"><b>Horror Books :-</a></li></b>
                                                <li><a href="archive.html">I am Behind</a></li>
                                                <li><a href="video-post.html">Sleep Over</a></li>
                                                <li><a href="single-post.html">The Mine</a></li>
                                                <li><a href="about.html">The Face at the Window</a></li>
                                                <li><a href="contact.html">Maya Villa </a></li>
                                                <li><a href="login.html">Taranath Trantrick</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="drama.html"><b>Dramma Books:-</a></li></b>
                                                <li><a href="archive.html">The Way to Steel (SAMPLE)</a></li>
                                                <li><a href="video-post.html">The Other Woman's Man</a></li>
                                                <li><a href="single-post.html">Desperate</a></li>
                                                <li><a href="about.html">Sanai</a></li>
                                                <li><a href="contact.html">Nabanna</a></li>
                                                <li><a href="login.html">Aadhe Adhure</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="comic.html"><b>Comic</a></li></b>
                                                <li><a href="archive.html">Archive</a></li>
                                                <li><a href="video-post.html">Single Video Post</a></li>
                                                <li><a href="single-post.html">Single Post</a></li>
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="login.html">Login</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="thriller.html"><b>Thriller</a></li></b>
                                                <li><a href="archive.html">Hush</a></li>
                                                <li><a href="bookpdf/alicyn-night-obsessed.pdf">Obsessed</a></li>
                                                <li><a href="single-post.html">On Emma's Bluff</a></li>
                                                <li><a href="about.html">Bloody Mary</a></li>
                                                <li><a href="bookpdf/missy-un-lucky-number-thirteen.pdf">(un)lucky Number thirteen</a></li>
                                                <li><a href="login.html">Andhari Afat - Suspense Gujarati Story</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <div class="top-meta-data d-flex align-items-center">
                            <!-- Top Search Area -->
                            <div class="search">
                            <form action="" method="get">
                                <input class="btn" list="books" name="books" id="topSearch" placeholder="Search">
                                <datalist id="books">
                                  <option value="Search By Author ">
                                  <option value="Search By Books ">
                                 
                                </datalist>
                            </div>
                                <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                              </form>

                            <!-- Admin 
                            <div>
                            <a href="" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><i class="fa fa-user" aria-hidden="true"></i></a>
                        
                        </div>-->
                        
                            <!--Subscrib Video -->
                            <a href="logout.php" class="submit-video"><span><i class="fa fa-cloud-upload"></i></span> <span class="video-text"> LogOut </span></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(img/Font.jpeg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Pustak</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Mag Posts Area Start ##### -->
    <section class="mag-posts-area d-flex flex-wrap">

        <!-- >>>>>>>>>>>>>>>>>>>>
         Post Left Sidebar Area
        <<<<<<<<<<<<<<<<<<<<< -->
        <div class="post-sidebar-area left-sidebar mt-30 mb-30 bg-white box-shadow">
            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Most Popular</h5>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="img/bg-img/4.jpg" alt="">
                    </div>
                    <div class="post-content">
                        <a href="bookpdf/" class="post-title">Syed Mujtaba Ali Rachana Somogro 1st part
                        </a>
                      
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="img/bg-img/5.jpg" alt="">
                    </div>
                    <div class="post-content">
                        <a href="bookpdf/agatha-christie-50-by-agatha-christie.pdf" class="post-title">Agatha Christie Bangla Books</a>
                        
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="img/bg-img/6.jpg" alt="">
                    </div>
                    <div class="post-content">
                        <a href="bookpdf/Byomkesh Shamagra-Sharadindu Bandyopadhyay.pdf" class="post-title">Byomkesh Bakshi Samagra</a>
                        
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="img/bg-img/7.jpg" alt="">
                    </div>
                    <div class="post-content">
                        <a href="bookpdf/" class="post-title">Believe By Glynis Rankin</a>
                        
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="img/bg-img/8.jpg" alt="">
                    </div>
                    <div class="post-content">
                        <a href="bookpdf/mary-claire-garcia-my-bestfriend.pdf" class="post-title">My Bestfriend</a>
                       
                    </div>
                </div>
            </div>

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget">
                <a href="bookpdf/An-Uncollected-Death.pdf" class="add-img"><img src="img/bg-img/add4.jpg" alt="" ></a>
                
            </div>

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Latest Books</h5>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="img/bg-img/Aj Ami Kothao Jabo Na.jpg" alt="">
                    </div>
                    <div class="post-content">
                        <a href="bookpdf/Aaj_Ami_kothao_Jabo_Naa_by_Humayun_Ahmed [BDeBooks.Com].pdf" class="post-title">Aj Ami Kothao Jabo Na By Humayun Ahmed (হুমায়ূন আহমেদ)</a>
                       
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="img/bg-img/abc.jpg" alt="">
                    </div>
                    <div class="post-content">
                        <a href="bookpdf/BORO-DIDI-By-Sarat-Chandra.pdf" class="post-title">BORO-DIDI By Sarat Chandra Chattopadhyay</a>
                       
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="img/bg-img/Galpo 101 Satyajit Ray.jpg" alt="">
                    </div>
                    <div class="post-content">
                        <a href="single-post.html" class="post-title">Satyajit Ray Books</a>
                        
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="img/bg-img/Upendrakishore Ray Chowdhury Books.jpg" alt="">
                    </div>
                    <div class="post-content">
                        <a href="bookpdf/TUNTUNIR_BOI.pdf" class="post-title">TUNTUNIR_BOI By Upendrakishore Ray Chowdhury Books</a>
                        
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="img/bg-img/satyajit-ray-feluda-image.jpg" alt="">
                    </div>
                    <div class="post-content">
                        <a href="bookpdf/Feluda Samagra-Part-1.pdf" class="post-title">Feluda(Part1) By Satyajit Ray</a>
                        
                    </div>
                </div>
                 <!-- Single Blog Post -->
                 <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="img/bg-img/satyajit-ray-feluda-image.jpg" alt="">
                    </div>
                    <div class="post-content">
                        <a href="bookpdf/felu da part- 2.pdf" class="post-title">Feluda(Part2) By Satyajit Ray</a>
                        
                    </div>
                </div>

            </div>
        </div>
        <!-- >>>>>>>>>>>>>>>>>>>>
             Main Posts Area
        <<<<<<<<<<<<<<<<<<<<< -->
        <div class="mag-posts-content mt-30 mb-30 p-30 box-shadow">
            <!-- Trending Now Posts Area -->
            <div class="trending-now-posts mb-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>TRENDING NOW</h5>
                </div>

                <div class="trending-post-slides owl-carousel">
                    <!-- Single Trending Post -->
                    <div class="single-trending-post">
                        <img src="img/bg-img/19.png" alt="">
                        
                        <div class="post-content">
                            <a href="#" class="post-cata">Thriller</a>
                            <a href="bookpdf/sara-e-rice-on-emma-039-s-bluff.pdf" class="#">
                                <span class="read-style">Read</span></a>
 
                        </div>
                    </div>

                    <!-- Single Trending Post -->
                    <div class="single-trending-post">
                        <img src="img/bg-img/23.jpg" alt="">
                        <div class="post-content">
                            <a href="#" class="post-cata">Horror</a>
                            <a href="bookpdf/c-b-cooper-the-daughter.pdf" class="#">
                                <span class="read-style">Read</span></a>
 
                        </div>
                    </div>

                    <!-- Single Trending Post -->
                    <div class="single-trending-post">
                        <img src="img/bg-img/301.png" alt="">
                        <div class="post-content">
                            <a href="#" class="post-cata">Adventure</a>
                            <a href="bookpdf/jingjing-zhu-the-lost-hero.pdf" class="#">
                                <span class="read-style">Read</span></a>
                         </div>
                    </div>

                    <!-- Single Trending Post -->
                    <div class="single-trending-post">
                        <img src="img/bg-img/m.png" alt="">
                        <div class="post-content">
                            <a href="#" class="post-cata">Adventure</a>
                            <a href="bookpdf/ally-carter-cross-my-heart-and-hope-to-spy-1.pdf" class="#">
                                <span class="read-style">Read</span></a>
 
                        </div>
                    </div>

                    <!-- Single Trending Post -->
                    <div class="single-trending-post">
                        <img src="img/bg-img/n.png" alt="">
                        <div class="post-content">
                            <a href="#" class="post-cata">Fairy Tale</a>
                            <a href="bookpdf/grimm10.pdf" class="#">
                                <span class="read-style">Read</span></a>
 
                        </div>
                    </div>

                    <!-- Single Trending Post -->
                    <div class="single-trending-post">
                        <img src="img/bg-img/12.jpg" alt="">
                        <div class="post-content">
                            <a href="#" class="post-cata">Romance</a>
                            <a href="bookpdf/lorelei-sutton-a-howl-in-the-night.pdf" class="#">
                                <span class="read-style">Read</span></a>
                           
                        </div>
                    </div>
                </div>
            </div>

            <!-- Feature Video Posts Area -->
            <div class="feature-video-posts mb-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Featured Books</h5>
                </div>

                <div class="featured-video-posts">
                    <div class="row">
                        <div class="col-12 col-lg-7">
                            <!-- Single Featured Post -->
                            <div class="single-featured-post">
                                <!-- Thumbnail -->
                                <div class="post-thumbnail mb-50">
                                        <a href="bookpdf/christie_8_2.pdf" class="#"><img src="img/bg-img/coverpic3d.png" alt="">
                                    
                                    <a href="bookpdf/christie_8_2.pdf"></a>
                                </div>
                                <!-- Post Contetnt -->
                                <div class="post-content">
                                    <div class="post-meta">
                            
                                    </div>
                                    <a href="bookpdf/christie_8_2.pdf" class="post-title">Murder on the Orient Express</a>
                                    <p>Murder on the Orient Express is a detective novel by British writer Agatha Christie featuring the Belgian detective Hercule Poirot</p>
                                </div>
                                <!-- Post Share Area -->
                                <div class="post-share-area d-flex align-items-center justify-content-between">
                                    <!-- Post Meta -->
                                    <div class="post-meta pl-3">
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                    </div>
                                    <!-- Share Info -->
                                    <div class="share-info">
                                        <a href="#" class="sharebtn"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                        <!-- All Share Buttons -->
                                        <div class="all-share-btn d-flex">
                                            <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="#" class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                            <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-5">
                            <!-- Featured Video Posts Slide -->
                            <div class="featured-video-posts-slide owl-carousel">

                                <div class="single--slide">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="img/bg-img/23.jpg" alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href="bookpdf/c-b-cooper-the-daughter.pdf" class="post-title">The Daughter By C.B Cooper</a>
                                          
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="img/bg-img/24.jpg" alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href="bookpdf/by-newmoon123-engaged-to-a-vampire.pdf" class="post-title">engaged to a vampire</a>
                                            
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="img/bg-img/25.jpg" alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href="bookpdf/jingjing-zhu-the-lost-hero.pdf" class="post-title">The Lost Hero</a>
                                            
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="img/bg-img/26.jpg" alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href="bookpdf/tim-lahaye-and-jerry-b-jenkins-left-behind.pdf" class="post-title">Left Behind</a>
                                           
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="img/bg-img/27.png" alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href="single-post.html" class="post-title">Prejudice</a>
                                            
                                        </div>
                                    </div>
                                     <!-- Single Blog Post -->
                                     <div class="single-blog-post d-flex style-3">
                                            <div class="post-thumbnail">
                                                <img src="img/bg-img/add5.jpg" alt="">
                                            </div>
                                            <div class="post-content">
                                                <a href="bookpdf/sir-arthur-conan-doyle-the-adventures-of-sherlock-holmes.pdf" class="post-title">The Adventures Of Sherlock Holmes</a>
                                              
                                            </div>
                                        </div>
                                         <!-- Single Blog Post -->
                                     <div class="single-blog-post d-flex style-3">
                                            <div class="post-thumbnail">
                                                <img src="img/bg-img/add4.jpg" alt="">
                                            </div>
                                            <div class="post-content">
                                                <a href="bookpdf/An-Uncollected-Death.pdf" class="post-title">An Uncollected Death</a>
                                              
                                            </div>
                                        </div>
                                         <!-- Single Blog Post -->
                                     <div class="single-blog-post d-flex style-3">
                                            <div class="post-thumbnail">
                                                <img src="img/bg-img/160.png" alt="">
                                            </div>
                                            <div class="post-content">
                                                <a href="bookpdf/s-g-ricketts-calypsor.pdf" class="post-title">Calypso</a>
                                              
                                            </div>
                                        </div>
                                </div>

                                <div class="single--slide">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="img/bg-img/23.jpg" alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href="bookpdf/c-b-cooper-the-daughter.pdf" class="post-title">The Daughter By C.B Cooper</a>
                                          
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="img/bg-img/24.jpg" alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href="bookpdf/by-newmoon123-engaged-to-a-vampire.pdf" class="post-title">engaged to a vampire</a>
                                            
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="img/bg-img/25.jpg" alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href="bookpdf/jingjing-zhu-the-lost-hero.pdf" class="post-title">The Lost Hero</a>
                                            
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="img/bg-img/26.jpg" alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href="bookpdf/tim-lahaye-and-jerry-b-jenkins-left-behind.pdf" class="post-title">Left Behind</a>
                                           
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="img/bg-img/27.png" alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href="single-post.html" class="post-title">Pride and Prejudice</a>
                                           
                                        </div>
                                    </div>
                                    
                                     <!-- Single Blog Post -->
                                     <div class="single-blog-post d-flex style-3">
                                            <div class="post-thumbnail">
                                                <img src="img/bg-img/add5.jpg" alt="">
                                            </div>
                                            <div class="post-content">
                                                <a href="bookpdf/sir-arthur-conan-doyle-the-adventures-of-sherlock-holmes.pdf" class="post-title">The Adventures Of Sherlock Holmes</a>
                                              
                                            </div>
                                        </div>
                                           <!-- Single Blog Post -->
                                     <div class="single-blog-post d-flex style-3">
                                            <div class="post-thumbnail">
                                                <img src="img/bg-img/add4.jpg" alt="">
                                            </div>
                                            <div class="post-content">
                                                <a href="bookpdf/An-Uncollected-Death.pdf" class="post-title">An Uncollected Death</a>
                                              
                                            </div>
                                        </div>
                                         <!-- Single Blog Post -->
                                     <div class="single-blog-post d-flex style-3">
                                            <div class="post-thumbnail">
                                                <img src="img/bg-img/160.png" alt="">
                                            </div>
                                            <div class="post-content">
                                                <a href="bookpdf/s-g-ricketts-calypsor.pdf" class="post-title">Calypso</a>
                                              
                                            </div>
                                        </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Most Viewed Videos -->
            <div class="most-viewed-videos mb-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Most Viewed Books</h5>
                </div>

                <div class="most-viewed-videos-slide owl-carousel">

                    <!-- Single Blog Post -->
                    <div class="single-blog-post style-4">
                        <div class="post-thumbnail">
                            <img src="img/bg-img/13.jpg" alt="">
                            <a href="bookpdf/katy-wong-arranged.pdf" class="#">
                            <span class="video-duration">Read</span></a>
                        </div>
                        <div class="post-content">
                            <a href="bookpdf/katy-wong-arranged.pdf" class="post-title">Arranged By Katy Wong</a>
                           
                        </div>
                    </div>

                    <!-- Single Blog Post -->
                    <div class="single-blog-post style-4">
                        <div class="post-thumbnail">
                            <img src="img/bg-img/157.png" alt="">
                            <a href="bookpdf/sarah-j-maas-throne-of-glass.pdf" class="#">
                            <span class="video-duration">Read</span></a>
                        </div>
                        <div class="post-content">
                            <a href="bookpdf/sarah-j-maas-throne-of-glass.pdf" class="post-title">Throne Of Glass</a>
                            
                        </div>
                    </div>

                    <!-- Single Blog Post -->
                    <div class="single-blog-post style-4">
                        <div class="post-thumbnail">
                            <img src="img/bg-img/30.png" alt="">
                            <a href="video-post.html" class="#">
                            <span class="video-duration">Read</span></a>
                        </div>
                        <div class="post-content">
                            <a href="single-post.html" class="post-title">Destined Love</a>
                           
                        </div>
                    </div>

                    <!-- Single Blog Post -->
                    <div class="single-blog-post style-4">
                        <div class="post-thumbnail">
                            <img src="img/bg-img/158.png" alt="">
                            <a href="bookpdf/epdf.pub_emma.pdf" class="#">
                            <span class="video-duration">Read</span></a>
                        </div>
                        <div class="post-content">
                            <a href="bookpdf/epdf.pub_emma.pdf" class="post-title">EMMA(Part-I) By JANE AUSTEN
                                    </a>
                           
                        </div>
                    </div>

                    <!-- Single Blog Post -->
                    <div class="single-blog-post style-4">
                        <div class="post-thumbnail">
                            <img src="img/bg-img/156.jpg" alt="">
                            <a href="bookpdf/juliet-rose-rain-on-my-wings.pdf" class="#">
                            <span class="video-duration">Read</span></a>
                        </div>
                        <div class="post-content">
                            <a href="bookpdf/juliet-rose-rain-on-my-wings.pdf" class="post-title">juliet-rose-rain-on-my-wings</a>
                            
                        </div>
                    </div>

                    <!-- Single Blog Post -->
                    <div class="single-blog-post style-4">
                        <div class="post-thumbnail">
                            <img src="img/bg-img/159.jpg" alt="">
                            <a href="bookpdf/little-women-compressed novel.pdf" class="#">
                            <span class="video-duration">Read</span></a>
                        </div>
                        <div class="post-content">
                            <a href="bookpdf/little-women-compressed novel.pdf" class="post-title">LITTLE WOMEN BY LOUISA M. ALCOTT</a>
                           
                        </div>
                    </div>

                </div>
            </div>

            <!-- Sports Videos -->
            <div class="sports-videos-area">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Novel</h5>
                </div>

                <div class="sports-videos-slides owl-carousel mb-30">
                    <!-- Single Featured Post -->
                    <div class="single-featured-post">
                        <!-- Thumbnail -->
                        <div class="post-thumbnail mb-50">
                                <a href="bookpdf/lorelei-sutton-a-howl-in-the-night.pdf" class="add-img"><img src="img/bg-img/59.jpg" alt="">
                            
                            <a href="bookpdf/lorelei-sutton-a-howl-in-the-night.pdf" class="#">
                                <span class="read-styl">Read</span></a> 
                        </div>
                        <!-- Post Contetnt -->
                        <div class="post-content">
                            <div class="post-meta">
                                <a href="#">MAY 8, 2019</a>
                                <a href="archive.html">Novel</a>
                            </div>
                            <a href="video-post.html" class="#">Peter and Wendy by James Mathew Barrie</a>
                            <p>Peter and Wendy is a fantasy novel by James Mathew Barrie. It is believed that this story was conceived by the author in his mother’s ever loving memory of his elder brother who died at the age of 13. Hence in his mother’s mind the boy never grown up. A boy who enjoys his childhood and unwilling to transform himself to adulthood is the theme behind this fiction story. Peter Pan, the lead character loves to listen to bedtime stories and lives in a Neverland, a fictitious island along with other boys.

                                    One day he invites her sister Wendy to his Neverland and asks her to be mother of the boys. They build a house for Wendy which is attacked by pirates. In an earlier incident Peter has won the heart of Indians, who help him later combating against the pirates. This novel is later transformed to a Oedipus like complex developed by Wendy who loves Peter, however Peter always wish, Wendy to be his mother only.</p>         
                        </div>
                       
                    </div>

                    <!-- Single Featured Post -->
                    <div class="single-featured-post">
                        <!-- Thumbnail -->
                        <div class="post-thumbnail mb-50">
                            
                            <a href="bookpdf/TheWizardofOz.pdf" class="add-img">
                                <img src="img/bg-img/60.jpg" alt="">
                            
                            <a href="bookpdf/TheWizardofOz.pdf" class="#">
                                <span class="read-styl">Read</span></a>                        </div>
                        <!-- Post Contetnt -->
                        <div class="post-content">
                            <div class="post-meta">
                                <a href="#">MAY 8, 2019</a>
                                <a href="archive.html">Novel</a>
                            </div>
                            <a href="video-post.html" class="post-title">The Wonderful Wizard of Oz by Lyman Frank Baum</a>
                            <p>	
                                    The Wonderful Wizard of Oz is a fantasy novel by Lyman Frank Baum. A cyclone carries away the farm house of a young girl and accidentally kills an evil ruler. To return home, the girl has to reach and kill the evil ruler of emerald city. Armed with her magical shoes, she travels in an adventurous path along with three other similar characters who also in her same situation. The wizard of OZ which appears differently to each person helps her to kill the evil ruler. 

                                    This adventure packed fantasy story is narrated with many peculiar characters and their good and bad parts. On their way to emerald city all the four travellers Dorothy, Scarecrow, Tin Woodman and Cowardly lion faces challenging situations and comes out of the challenges with flying colors. While the evil ruler is projected as a strong personality, Ironically Dorothy ends up killing the evil ruler with a pot of water and melts her down.
                                </p>
                        </div>
                            </div>
                        
                    

                    <!-- Single Featured Post -->
                    <div class="single-featured-post">
                        <!-- Thumbnail -->
                        <div class="post-thumbnail mb-50">
                           
                            <a href="bookpdf/An-Uncollected-Death.pdf" class="add-img"> <img src="img/bg-img/65.jpg" alt="">

                            <a href="bookpdf/lorelei-sutton-a-howl-in-the-night.pdf" class="#">
                                <span class="read-styl">Read</span></a>
                        </div>
                        <!-- Post Contetnt -->
                        <div class="post-content">
                            <div class="post-meta">
                                <a href="#">MAY 8, 2019</a>
                                <a href="archive.html">Novel</a>
                            </div>
                            <a href="video-post.html" class="post-title">The Call Of The Wild by Jack London</a>
                            <p>	
                                    The Call Of The Wild is a novel by Jack London based on the Darwin’s theory; Survival of the fittest. A dog which is nurtured as pet, unearths the wolf inside it, when exposed to brutal and cruel treatments under harsh circumstances. The story is set in the frozen Canadian Klondike gold rush during 1890s. Central character of this story revolves around Buck, a domesticated dog. 

                                    Stolen to compensate the gambling debts of the gardener, Buck is sold to the gambling club. The club sells him to Canadian dispatchers and ultimately moved to a Klondike region with extreme climatic conditions where it learns to survive the cold winter. In a rivalry with Spitz, Buck wins and emerges as the leader of the team.</p>             </div>
                       
                    </div>
                </div>

                <div class="row">
                    <!-- Single Blog Post -->
                    <div class="col-12 col-lg-6">
                        <div class="single-blog-post d-flex style-3 mb-30">
                            <div class="post-thumbnail">
                                <img src="img/bg-img/31.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="bookpdf/felix-timothy-ionshaker-part-i08.pdf" class="post-title">Ionshaker By  Felix Timoty</a>
                                
                            </div>
                        </div>
                    </div>

                    <!-- Single Blog Post -->
                    <div class="col-12 col-lg-6">
                        <div class="single-blog-post d-flex style-3 mb-30">
                            <div class="post-thumbnail">
                                <img src="img/bg-img/32.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="bookpdf/alicyn-night-obsessed.pdf" class="post-title">Obsessed By Alicyn Night</a>
                              
                            </div>
                        </div>
                    </div>

                    <!-- Single Blog Post -->
                    <div class="col-12 col-lg-6">
                        <div class="single-blog-post d-flex style-3 mb-30">
                            <div class="post-thumbnail">
                                <img src="img/bg-img/33.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="bookpdf/missy-un-lucky-number-thirteen.pdf" class="post-title">(Un)lucky Number thirteen</a>
                               
                            </div>
                        </div>
                    </div>

                    <!-- Single Blog Post -->
                    <div class="col-12 col-lg-6">
                        <div class="single-blog-post d-flex style-3 mb-30">
                            <div class="post-thumbnail">
                                <img src="img/bg-img/34.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="single-post.html" class="post-title">The Secret Of The House On Dead-End Lane </a>
                               
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- >>>>>>>>>>>>>>>>>>>>
         Post Right Sidebar Area
        <<<<<<<<<<<<<<<<<<<<< -->
        <div class="post-sidebar-area right-sidebar mt-30 mb-30 box-shadow">
            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Social Followers Info -->
                <div class="social-followers-info">
                    <!-- Facebook -->
                    <a href="#" class="facebook-fans"><i class="fa fa-facebook"></i> 4,360 <span>Fans</span></a>
                    <!-- Twitter -->
                    <a href="#" class="twitter-followers"><i class="fa fa-twitter"></i> 3,280 <span>Followers</span></a>
                    <!-- YouTube -->
                    <a href="#" class="youtube-subscribers"><i class="fa fa-youtube"></i> 1250 <span>Subscribers</span></a>
                    <!-- Google -->
                    <a href="#" class="google-followers"><i class="fa fa-google-plus"></i> 4,230 <span>Followers</span></a>
                </div>
            </div>

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Popular Categories</h5>
                </div>

                <!-- Catagory Widget -->
                <ul class="catagory-widgets">
                    <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Thriller</span> <span>15</span></a></li>
                    <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Suspense</span> <span>30</span></a></li>
                    <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Fairytale</span> <span>13</span></a></li>
                    <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Novel</span> <span>06</span></a></li>
                    
                </ul>
            </div>

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget">
                <a href="bookpdf/sir-arthur-conan-doyle-the-adventures-of-sherlock-holmes.pdf" class="add-img"><img src="img/bg-img/add5.jpg" alt=""></a>
            </div>

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Top Rated</h5>
                </div>



                <!-- Single YouTube Channel -->
                <div class="single-youtube-channel d-flex">
                    <div class="youtube-channel-thumbnail">
                        <a href="bookpdf/just friend.pdf"><img src="img/bg-img/150.jpg" alt=""></a>
                    </div>
                    <div class="youtube-channel-content">
                        <a href="bookpdf/just friend.pdf" class="channel-title">Just Friend</a>
                        <a href="bookpdf/just friend.pdf" class="btn subscribe-btn">Read</a>
                    </div>
                </div>

                <!-- Single YouTube Channel -->
                <div class="single-youtube-channel d-flex">
                    <div class="youtube-channel-thumbnail">
                            <a href="bookpdf/151.pdf"><img src="img/bg-img/151.jpg" alt=""></a>
                        </div>
                        <div class="youtube-channel-content">
                            <a href="bookpdf/151.pdf" class="channel-title">Fairy-Struck</a>
                            <a href="bookpdf/151.pdf" class="btn subscribe-btn">Read</a>
                        </div>
                    </div>
    
                <!-- Single YouTube Channel -->
                <div class="single-youtube-channel d-flex">
                    <div class="youtube-channel-thumbnail">
                            <a href="bookpdf/152.pdf"><img src="img/bg-img/152.jpg" alt=""></a>
                        </div>
                        <div class="youtube-channel-content">
                            <a href="bookpdf/152.pdf" class="channel-title">Undercover Soldier Part One</a>
                            <a href="bookpdf/152.pdf" class="btn subscribe-btn">Read</a>
                        </div>
                    </div>
    

                <!-- Single YouTube Channel -->
                <div class="single-youtube-channel d-flex">
                    <div class="youtube-channel-thumbnail">
                            <a href="bookpdf/juliet-rose-rain-on-my-wings.pdf"><img src="img/bg-img/156.jpg" alt=""></a>
                        </div>
                        <div class="youtube-channel-content">
                            <a href="bookpdf/juliet-rose-rain-on-my-wings.pdf" class="channel-title">juliet-rose-rain-on-my-wings</a>
                            <a href="bookpdf/juliet-rose-rain-on-my-wings.pdf" class="btn subscribe-btn">Read</a>
                        </div>
                    </div>
    

                <!-- Single YouTube Channel -->
                <div class="single-youtube-channel d-flex">
                    <div class="youtube-channel-thumbnail">
                            <a href="bookpdf/s-g-ricketts-calypso.pdf"><img src="img/bg-img/160.png" alt=""></a>
                        </div>
                        <div class="youtube-channel-content">
                            <a href="bookpdf/s-g-ricketts-calypso.pdf" class="channel-title">Calypso By S. G. Ricketts</a>
                            <a href="bookpdf/s-g-ricketts-calypso.pdf" class="btn subscribe-btn">Read</a>
                        </div>
                    </div>
     <!-- Single YouTube Channel -->
     <div class="single-youtube-channel d-flex">
            <div class="youtube-channel-thumbnail">
                    <a href="bookpdf/An-Uncollected-Death.pdf"><img src="img/bg-img/add4.jpg" alt=""></a>
                </div>
                <div class="youtube-channel-content">
                    <a href="bookpdf/An-Uncollected-Death.pdfl" class="channel-title">An Uncollected Death</a>
                    <a href="bookpdf/An-Uncollected-Death.pdf" class="btn subscribe-btn">Read</a>
                </div>
            </div>
             <!-- Single YouTube Channel -->
             <div class="single-youtube-channel d-flex">
                    <div class="youtube-channel-thumbnail">
                            <a href=" bookpdf/sir-arthur-conan-doyle-the-adventures-of-sherlock-holmes.pdf"><img src="img/bg-img/add5.jpg" alt=""></a>
                           
                        </div>
                        <div class="youtube-channel-content">
                            <a href=" bookpdf/sir-arthur-conan-doyle-the-adventures-of-sherlock-holmes.pdf"l" class="channel-title">The Adventures Of Sherlock Holmes</a>
                            <a href=" bookpdf/sir-arthur-conan-doyle-the-adventures-of-sherlock-holmes.pdf" class="btn subscribe-btn">Read</a>
                        </div>
                    </div>
                     <!-- Single YouTube Channel -->
                <div class="single-youtube-channel d-flex">
                        <div class="youtube-channel-thumbnail">
                                <a href="bookpdf/171.pdf"><img src="img/bg-img/171.jpg" alt=""></a>
                            </div>
                            <div class="youtube-channel-content">
                                <a href="bookpdf/171.pdf" class="channel-title">Cave Man</a>
                                <a href="bookpdf/171.pdf" class="btn subscribe-btn">Read</a>
                            </div>
                        </div>

                         <!-- Single YouTube Channel -->
                <div class="single-youtube-channel d-flex">
                        <div class="youtube-channel-thumbnail">
                                <a href="bookpdf/william-shakespeare-hamletwilliam-shakespeare-hamlet.html"><img src="img/bg-img/165.png" alt=""></a>
                            </div>
                            <div class="youtube-channel-content">
                                <a href="bookpdf/william-shakespeare-hamletwilliam-shakespeare-hamlet.html" class="channel-title">Hamlet By William Shakespeare</a>
                                <a href="bookpdf/william-shakespeare-hamlet.pdf" class="btn subscribe-btn">Read</a>
                            </div>
                        </div>

                         <!-- Single YouTube Channel -->
                <div class="single-youtube-channel d-flex">
                        <div class="youtube-channel-thumbnail">
                                <a href="bookpdf/170.pdf"><img src="img/bg-img/170.jpg" alt=""></a>
                            </div>
                            <div class="youtube-channel-content">
                                <a href="bookpdf/170.pdf" class="channel-title">book name</a>
                                <a href="bookpdf/170.pdf" class="btn subscribe-btn">Read</a>
                            </div>
                        </div>

                         <!-- Single YouTube Channel -->
                <div class="single-youtube-channel d-flex">
                        <div class="youtube-channel-thumbnail">
                                <a href="book link"><img src="img/bg-img/14.jpg" alt=""></a>
                            </div>
                            <div class="youtube-channel-content">
                                <a href="single-post.html" class="channel-title">book name</a>
                                <a href="#" class="btn subscribe-btn">Read</a>
                            </div>
                        </div>

                         <!-- Single YouTube Channel -->
                <div class="single-youtube-channel d-flex">
                        <div class="youtube-channel-thumbnail">
                                <a href="book link"><img src="img/bg-img/14.jpg" alt=""></a>
                            </div>
                            <div class="youtube-channel-content">
                                <a href="single-post.html" class="channel-title">book name</a>
                                <a href="#" class="btn subscribe-btn">Read</a>
                            </div>
                        </div>

            </div>

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Newsletter</h5>
                </div>

                <div class="newsletter-form">
                    <p>Subscribe our newsletter gor get notification about new updates, information discount, etc.</p>
                    <form action="#" method="get">
                        <input type="search" name="widget-search" placeholder="Enter your email">
                        <button type="submit" class="btn mag-btn w-100">Subscribe</button>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Mag Posts Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget">
                        <!-- Logo -->
                        <a href="index.html" class="foo-logo"><img src="img/core-img/logo2.png" alt=""></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class="footer-social-info">
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget">
                        <h6 class="widget-title">Categories</h6>
                        <nav class="footer-widget-nav">
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Horror Books</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Historical Books</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Comic Books</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Drama Books</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Fairytale Books</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Suspense</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Thriller</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Novel</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Romance</a></li>

                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget">
                        <h6 class="widget-title">Romance Books</h6>
                        <!-- Single Blog Post -->
                        <div class="single-blog-post style-2 d-flex">
                            <div class="post-thumbnail">
                                <img src="img/bg-img/12.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="bookpdf/lorelei-sutton-a-howl-in-the-night.pdf" class="post-title">A Howl In The Night</a>
                                
                            </div>
                        </div>
                        <!-- Single Blog Post -->
                        <div class="single-blog-post style-2 d-flex">
                            <div class="post-thumbnail">
                                <img src="img/bg-img/13.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="single-post.html" class="post-title">
                                    Arranged BY Katy Wong
                                    </a>
                               
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget">
                        <h6 class="widget-title">Books</h6>
                        <ul class="footer-tags">
                            <li><a href="#">Aranyak</a></li>
                            <li><a href="#">Moon Mountain</a></li>
                            <li><a href="#">Gora</a></li>
                            <li><a href="#">Sanchaita</a></li>
                            <li><a href="#">The Home And The World</a></li>
                            <li><a href="bookpdf/epdf.pub_emma.pdf">Emma(Part-I)</a></li>
                            <li><a href="#">Choker Bali</a></li>
                            <li><a href="#">Walden</a></li>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="copywrite-area">
            <div class="container">
                <div class="row">
                    <!-- Copywrite Text -->
                    <div class="col-12 col-sm-6">
                        <p class="copywrite-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                    <div class="col-12 col-sm-6">
                        <nav class="footer-nav">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Advertisement</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
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

<!-- Admin popup-->




<div id="id01" class="modal">
    <div class="row">
        <div class="col-sm-6"  style="padding-left: 50px;">
             <form class="modal-content animate" action="admin_val.php" method="post">
    <div class="imgcontainer">
      
      <h1>Admin login here</h1>
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="name" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit" name="button">Login</button>
      
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>   
   </div>
   <div class="col-sm-6"  style="padding-right: 50px;">
        <form class="modal-content animate" action="user_val.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <h1>User login here</h1>
      
    </div>

    <div class="container">
      <label for="psw"><b>Email</b></label><br>
      <input type="email" class="form-control" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label><br>
      <input type="password" class="form-control" placeholder="Enter Password" name="password" required><br>
        
      <button type="submit" name="button">Login</button>
      <label><input type="checkbox" checked="checked" name="remember"> Remember me</label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>   </div>
        </div>
    </div>
        
 
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


</body>
</html>