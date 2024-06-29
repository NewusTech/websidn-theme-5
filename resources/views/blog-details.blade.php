<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Phozogy Template">
    <meta name="keywords" content="Phozogy, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Music Organizer</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Quantico:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo">
                        <a href="/">
                            
                            @foreach ($logo as $logos)
                                @if ($logos->images)
                                    <img src="{{ Storage::disk('s3')->url($logos->images->path) }}" class="img-fluid " alt="Image" style="height: 35px; width:250px; object-fit: cover; ">
                                @else
                                    Gambar tidak tersedia
                                @endif
                            @endforeach
                        </a>
                    </div>
                    <nav class="nav-menu mobile-menu">
                        <ul>
                            <li><a href="/">Beranda</a></li>
                            <li><a href="/layanan">Layanan</a></li>
                            <li><a href="/galleri">Galeri</a></li>
                            <li><a href="/portofolio">Portofolio</a></li>
                            <li><a href="/tentang-kami">Tentang Kami</a></li>
                            <li><a href="/artikel">Artikel</a></li>
                            <a href="/kontak-kami" class="primary-btn d-xl-inline-block rounded-pill">Hubungi Kami</a>
                        </ul> 
                    </nav>    
                    <div id="mobile-menu-wrap"></div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Blog Details Section Begin -->
    @foreach ($carousel as $item)
        <div class="blog-hero set-bg" data-setbg="{{ Storage::disk('s3')->url($item->path) }}"></div>
    @endforeach
    <section class="blog-details-section">
        <div class="container">
            <div class="row">
                {{-- @foreach ($blog as $artikel) --}}
                <div class="col-lg-12">
                    <div class="blog-details-text">
                        <div class="bd-title">
                            <div class="bt-bread">
                                <a href="/"><i class="fa fa-home"></i> Beranda</a>
                                <a href="/artikel">Artikel</a>
                                <span>{{ $blog->judul }}</span>
                            </div>
                            <h2>{{ $blog->judul }}</h2>
                            <ul>
                                <li>by <span>{{ $blog->nama_penulis }}</span></li>
                                <li>{{ $blog->date }}</li>
                            </ul>
                        </div>
                        <div class="bd-pics " style="display: flex; justify-content: center;">
                            <img src="{{ Storage::disk('s3')->url($blog->image) }}" alt="">
                            
                        </div>
                        {{-- <div class="bd-top-text">
                            <p>Around 40% of B2B marketers say email newsletters are one of the key features to their
                                content marketing success. There are tons of statistics that prove just how profitable
                                emails can be for your business. What the numbers don’t show is that there’s a lot of
                                testing and tweaking that goes into the email’s design and layout that allows the sender
                                to get massive rewards.</p>
                            <p>What makes a successful email or email campaign? One of the major elements in the design
                                and layout that draws people in and grows your click-through rate. Today, I’ll be
                                showing you ten examples of winning email design and how to make your own.</p>
                        </div> --}}
                        {{-- <div class="bd-quote">
                            <p>Bringing the reader towards each CTA with “Awareness, Consideration, and Action” as the
                                main stages. Harry’s used a color block design to guide the reader through each step of
                                the email. Color blocking helps to guide the reader through your copy, making it easy to
                                read with a pleasing layout.</p>
                        </div> --}}
                        <div class="bd-desc">
                            <p>{{$blog->deskripsi}}</p>
                        </div>
                        
                        {{-- <div class="bd-last-desc">
                            <p>If they’re still in the awareness stages of getting to know the brand, then they’ll most
                                likely keep reading more on what Tock has to offer. They’re using one email design to
                                speak to two types of readers both in the first stage of their welcome email.You can
                                also change an email design’s color based on new product, season or to match a marketing
                                campaign’s new look and feel.</p>
                            <p>Design: The email imitates a product marketing funnel system, bringing the reader towards
                                each CTA with “Awareness, Consideration, and Action” as the main stages. Harry’s used a
                                color block design to guide the reader through each step of the email. Color blocking
                                helps to guide the reader through your copy, making it easy to read with a pleasing
                                layout.</p>
                        </div> --}}
                        {{-- <div class="bd-tag-share">
                            <div class="tags">
                                <a href="#">Typography</a>
                                <a href="#">Guides</a>
                                <a href="#">Improving</a>
                                <a href="#">Smartphone</a>
                            </div>
                            <div class="share">
                                <span>Share</span>
                                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="youtube"><i class="fa fa-youtube-play"></i></a>
                                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div> --}}
                        
                    </div>
                </div>
                {{-- @endforeach --}}
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="fs-about">
                        <div class="fa-logo">
                            <a href="#">
                                <img src="img/f-logo.png" alt="">
                            </a>
                        </div>
                        <p>Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                            et dolore magna aliqua.</p>
                        <div class="fa-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="fs-widget">
                        <h5>Instagram</h5>
                        <div class="fw-instagram">
                            <img src="img/instagram/insta-1.jpg" alt="">
                            <img src="img/instagram/insta-2.jpg" alt="">
                            <img src="img/instagram/insta-3.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="fs-widget">
                        <h5>Quick links</h5>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">Portfolio</a></li>
                            <li><a href="#">Services</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="fs-widget">
                        <h5>Subscribe</h5>
                        <p>Imolor amet consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        <div class="fw-subscribe">
                            <form action="#">
                                <input type="text" placeholder="Email">
                                <button type="submit"><i class="fa fa-send"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="copyright-text">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>