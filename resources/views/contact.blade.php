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

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option py-4 ">
        <div class="container ">
            <div class="row align-items-center justify-content-center text-center ">
                <div class="col-lg-12 ">
                    <div class="bo-links" >
                        <a href="/" style="font-size:20px"><i class="fa fa-home"></i><b> Beranda</b></a>
                        <span class="text-dark" style="font-size:20px">Kontak Kami</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Contact Section Begin -->
    <section class="contact-section py-4 bg-fourth">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 text-center">
                    <div class="contact-text">
                        <h3>Hubungi Kami</h3>
                        <p>Jika ada pertanyaan atau butuh informasi lebih lanjut mengenai layanan kami, jangan ragu menghubungi kami melalui kontak, email, atau telepon. Tim kami siap membantu dan memberikan solusi terbaik. Terima kasih atas kepercayaan Anda!</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between px-5 mx-5 text-center">
                @foreach ($contact as $kontak)
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="card" >
                        <a href="#">
                        <img src="img/telepon.png" class="img-fluid my-2" height="100px" width="100px">
                        <div class="card-body text-center">
                            <h4 class="card-title">Telepon</h4>
                            <p class="text-dark">{{ $kontak->whatsapp }} </p>
                          </div></a>
                    </div>
                </div> 
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="card" > 
                        <a href="https://wa.me/{{ $kontak->whatsapp }}">
                        <img src="img/whatsapp.png" class="img-fluid my-2" height="100px" width="100px">
                        <div class="card-body text-center">
                          <h4 class="card-title">Whatsapp</h4>
                          <p class="text-dark">{{ $kontak->whatsapp }} </p>
                        </div></a>
                    </div>
                </div> 
                <div class="col-lg-4 col-md-6 mb-2" >
                    <div class="card">
                        <a href="{{ $kontak->instagram }}">
                        <img src="img/instagram.png" class="img-fluid my-2" height="100px" width="100px" >
                        <div class="card-body text-center">
                          <h4 class="card-title">Instagram</h4>
                          <p class="text-dark">{{ $kontak->instagram }} </p>
                        </div></a>
                    </div>
                </div> 
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="card" >
                        <a href="{{ $kontak->facebook }}">
                        <img src="img/facebook.png" class="img-fluid my-2" height="100px" width="100px">
                        <div class="card-body text-center">
                          <h4 class="card-title">Facebook</h4>
                          <p class="text-dark">{{ $kontak->facebook }} </p>
                        </div></a>
                    </div>
                </div> 
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="card" >
                        <a href="{{ $kontak->youtube }}">
                        <img src="img/youtube.png" class="img-fluid my-2" height="100px" width="100px">
                        <div class="card-body text-center">
                          <h4 class="card-title">Youtube</h4>
                          <p class="text-dark">{{ $kontak->youtube }}</p>
                        </div></a>
                    </div>
                </div> 
                <div class="col-lg-4 col-md-6 mb-2" >
                    <div class="card">
                        <a href="{{ $kontak->tiktok }}">
                        <img src="img/tiktok.png" class="img-fluid my-2" height="100px" width="100px" >
                        <div class="card-body text-center">
                          <h4 class="card-title">Tiktok</h4>
                          <p class="text-dark">{{ $kontak->tiktok }} </p>
                        </div></a>
                    </div>
                </div> 
                @endforeach
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Google Maps Section -->
    @foreach ($contact as $kontak)
        <div class="map-container">
            <iframe src="{{ $kontak->map }}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    @endforeach
    
    <!-- Back to Top -->
    @foreach ($contact as $kontak)
        <a href="https://wa.me/{{ $kontak->whatsapp }}?text=Halo,%20saya%20tertarik%20dengan%20layanan%20Anda." class="whatsapp-sticky">
            <i class="fab fa-whatsapp"></i>
        </a>
    @endforeach

    <!-- Footer Section Begin -->
    <footer class="footer-section">
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
                    <div class="copyright-text">
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