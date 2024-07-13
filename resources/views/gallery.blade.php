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
    <header class="header-section mx-auto justify-content-center " style="background-color: #036666">
        <div class="container-fluid col-lg" >
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
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
                    <nav class="nav-menu mobile-menu justify-content-center">
                        <ul>
                            <li ><a href="/">Beranda</a></li>
                            <li><a href="/layanan">Layanan</a></li>
                            <li class="active text-white"><a href="/galleri">Galeri</a></li>
                            <li><a href="/portofolio">Portofolio</a></li>
                            <li><a href="/tentang-kami">Tentang Kami</a></li>
                            <li><a href="/artikel">Artikel</a></li>
                            <a href="/kontak-kami" class="primary-btn d-xl-inline-block rounded-pill" style="background-color: #55828B">Hubungi Kami</a>
                        </ul> 
                    </nav>    
                    <div id="mobile-menu-wrap"></div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option py-4 " style="background-color: #87BBA2">
        <div class="container ">
            <div class="row align-items-center justify-content-center text-center ">
                <div class="col-lg-12 ">
                    <div class="bo-links" >
                        <a href="/" style="font-size:20px"><i class="fa fa-home"></i><b> Beranda</b></a>
                        <span class="text-white" style="font-size:20px">Galeri Kami</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Gallery Section Begin -->
    <div class="portfolio-section py-4 justify-content-center " style="background-color: #3B6064">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-3">
                        <h2 class="text-white">Gallery Kami</h2>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="filter-controls text-dark">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            @foreach ($gallery->unique('texts.heading') as $galeri)
                            <li data-filter=".{{ $galeri->texts->heading }}">{{ $galeri->texts->heading }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-12 mx-auto">
                    <div class="portfolio-filter">
                        @foreach ($gallery as $galeri)
                        <div class="pf-item set-bg {{ $galeri->texts->heading }} " data-setbg="{{ Storage::disk('s3')->url($galeri->images->path) }}" style="border: 3px solid #ffffff;">
                            <a href="{{ Storage::disk('s3')->url($galeri->images->path) }}" class="pf-icon image-popup"><span class="icon_plus"></span></a>
                            <div class="pf-text">
                                <h4>{{ $galeri->texts->heading }}</h4>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery Section End -->

    <!-- Back to Top -->
    @foreach ($contact as $kontak)
        <a href="https://wa.me/{{ $kontak->whatsapp }}?text=Halo,%20saya%20tertarik%20dengan%20layanan%20Anda." class="whatsapp-sticky">
            <i class="fab fa-whatsapp"></i>
        </a>
    @endforeach

    <!-- Footer Section Begin -->
    <footer class="footer-section" style="background-color: #364958">
        <div class="container px-4">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="fs-about">
                        <div class="fa-logo">
                            <a href="#">
                                @foreach ($logo as $logos)
                                    @if ($logos->images)
                                        <img src="{{ Storage::disk('s3')->url($logos->images->path) }}" class="img-fluid " alt="Image" style="height: 35px; width:250px; object-fit: cover; ">
                                    @else
                                        Gambar tidak tersedia
                                    @endif
                                @endforeach
                            </a>
                        </div>
                        @foreach ($about as $abouts)
                            <p>{{ $abouts->text }}</p>
                        @endforeach    
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 ">
                    @foreach ($contact as $kontak)
                    <div class="fs-widget">
                        <h5>Follow Us</h5>
                        <p><a class="text-white" href="https://wa.me/{{ $kontak->whatsapp }}" target="Tes Aja"><i class="fab fa-whatsapp text-success me-2"></i> Whatsapp</a></p>
                        <p><a class="text-white" href="{{ $kontak->instagram }}"><i class="fab fa-instagram text-success me-2"></i> Instagram</a></p>
                        <p><a class="text-white" href="{{ $kontak->facebook }}"><i class="fab fa-facebook text-success me-2"></i> Facebook</a></p>
                        <p><a class="text-white" href="{{ $kontak->youtube }}"><i class="fab fa-youtube text-success me-2"></i> Youtube</a></p>
                    </div>
                    @endforeach
                </div>
                <div class="col-lg-12">
                    <div class="copyright-text text-white">
                        <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Designed By <a href="https://websidn.com" target="_blank">Websidn</a></p>
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