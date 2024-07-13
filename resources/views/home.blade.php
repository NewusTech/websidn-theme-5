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
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Navbar Section Begin -->
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
                            <li class="active text-white"><a href="/">Beranda</a></li>
                            <li><a href="/layanan">Layanan</a></li>
                            <li><a href="/galleri">Galeri</a></li>
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
    <!-- Navbar End -->

    <!-- Carousel Section Begin -->
    <section class="hero-section">
        <div class="hs-slider owl-carousel">
            @foreach ($carousel as $slider)
            <div class="hs-item set-bg" data-setbg="{{ Storage::disk('s3')->url($slider->path) }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="hs-text">
                                <h2>Music Organizer</h2>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <!-- Carousel Section End -->

    
    <!-- Services Section Begin -->
    <section class="services-section spad" style="background-color: #3B6064">
        <div class="container">
            
            <div class="col-lg-12 text-center">
                <div class="section-title text-white">
                    <h2>LAYANAN KAMI</h2>
                    <p>Lihatlah Layanan Yang Kami Berikan Kepada Anda</p>
                </div>
            </div>
            
            <div class="row">
                @foreach ($service as $layanan)
                <div class="col-lg-4 col-md-6 col-sm-6" >
                    <div class="services-item text-white " style="background-color: #67b99a; border: 1px solid #fdfdfd;">
                        <img src="{{ Storage::disk('s3')->url($layanan->image) }}" alt="">
                        <h3 >{{ $layanan->judul }}</h3>
                        <p>{{ $layanan->detail }}</p>
                        <a href="/layanan" class="primary-btn" style="background-color: #036666">Read More</a>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </section>
    <!-- Services Section End -->
    
    <!-- About Section Begin -->
    <section class="about-section " >
        <div class="container-fluid" >
            
            <div class="row">
                @foreach ($about as $abouts)
                <div class="col-lg-5 p-0">
                    <div class="about-pic set-bg" data-setbg="{{ Storage::disk('s3')->url($abouts->gambar) }}" data-video="{{ $abouts->video }}">
                        <a class="play-btn"><i class="fa fa-play"></i></a>
                    </div>
                    
                </div>
                <div class="col-lg-7 p-0" >
                    <div class="about-text text-white" style="background-color: #55828B">
                        <div class="section-title">
                            <h2>Tentang Kami</h2>
                            <h4 class="mb-3">{{ $abouts->judul }}</h4>
                            <p style="font-size: 19px;">{{$abouts->text}}
                            </p>
                            
                            <a href="/layanan" class="primary-btn mt-3" style="background-color: #036666">Read More</a>
                        </div>
                        
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Modal -->
    <div id="videoModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="video-container">
                <iframe id="youtubeVideo" width="560" height="315" src="" allowfullscreen></iframe>
            </div>
        </div>
    </div>


    

    

    <!-- Header Section Begin -->
    @foreach ($header as $headers)
    <div class="container-fluid py-5 mb-1" style="background: url('{{ Storage::disk('s3')->url($headers->images->path) }}') center center no-repeat; background-size: cover;">
        <div class="container py-5 mb-1 ">
            <div class="container py-5 mb-1 ">
                <div class="container py-5 mb-1 ">
                    <div class="container py-5 mb-1 ">
            
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    

    <!-- Pricing Section Begin -->
    <section class="pricing-section py-3" style="background-color: #3B6064">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title pricing-title text-white">
                        <h2>Daftar Harga</h2>
                        <p>Kami Berikan Harga Terbaik Untuk Anda</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($price as $prices)
                <div class="col-lg-3 col-md-6" >
                    <div class="pricing-item" style="background-color: #67b99a">
                        <div class="pi-price text-white" >
                            <h2 class="text-white">Paket</h2>
                        </div>
                        <div class="pi-title mt-1 text-white">
                            <h3 class="text-white">{{ $prices->judul }}</h3>
                        </div>
                        <div class="pi-text ">
                            <ul>
                                <li class="text-white">{{ $prices->item1 }}</li>
                                <li class="text-white">{{ $prices->item2 }}</li>
                                <li class="text-white">{{ $prices->item3 }}</li>
                                <li class="text-white">{{ $prices->item4 }}</li>
                                <li class="text-white">{{ $prices->item5 }}</li>
                            </ul>
                            <a href="/layanan" class="primary-btn text-white" style="background-color: #036666">See More</a>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </section>
    <!-- Pricing Section End -->

    <!-- Gallery Section Begin -->
    <section class="portfolio-section py-4 justify-content-center" style="background-color: #55828B">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-white">
                        <h2 class="mb-4">Gallery Kami</h2>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center align-items-center">
                @foreach ($gallery as $galeri)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="portfolio-filter">
                        <div class="pf-item set-bg {{ $galeri->texts->heading }} " data-setbg="{{ Storage::disk('s3')->url($galeri->images->path) }}" style="border: 3px solid #ffffff;">
                            <a href="{{ Storage::disk('s3')->url($galeri->images->path) }}" class="pf-icon image-popup"><span class="icon_plus"></span></a>
                            <div class="pf-text">
                                <h4>{{ $galeri->texts->heading }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Gallery Section End -->

    <!-- Team Section Begin -->
    <section class="team-section bg-third py-2" style="background-color: #3B6064">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-6">
                    <div class="section-title text-center text-white">
                        <h2>Team Member</h2>
                        <p>Kami Memiliki Tim Ahli Yang Berpengalaman</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($team as $tim)
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-item" style="border: 1px solid #070707; background-color:#67b99a">
                        <img src="{{ Storage::disk('s3')->url($tim->image) }}" alt="">
                        <div class="ti-text ">
                            <h5 class="text-white">{{ $tim->judul }}</h5>
                            <span class="text-white">{{ $tim->detail }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </section>
    <!-- Team Section End -->

    <!-- Testimoial Section Begin -->
    <section class="testimonial-section py-2" style="background-color: #67b99a">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-white">
                        <h2>Testimonial</h2>
                        <p>Apa Yang Klien Kami Katakan</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($testimoni as $review)
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="testimonial-item">
                        <div class="ti-author">
                            <div class="ta-pic">
                                <img src="{{ Storage::disk('s3')->url($review->image) }}" alt="">
                            </div>
                            <div class="ta-text">
                                <h5 class="text-white">{{ $review->name }}</h5>
                                <span class="text-white">{{ $review->job }}</span>
                            </div>
                        </div>
                        <p class="text-white">{{$review->description}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

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
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const aboutPics = document.querySelectorAll('.about-pic');
            const playBtns = document.querySelectorAll('.play-btn');
            const videoModal = document.getElementById('videoModal');
            const closeBtn = document.querySelector('.close');
            const youtubeVideo = document.getElementById('youtubeVideo');
    
            // Loop through each .about-pic element
            aboutPics.forEach((pic, index) => {
                // Add click event listener to each .about-pic element
                pic.addEventListener('click', function() {
                    videoModal.style.display = 'block';
                    // Get the video URL from data attribute
                    const videoUrl = pic.dataset.video;
                    // Set the src attribute of youtubeVideo iframe
                    youtubeVideo.src = videoUrl;
                });
            });
    
            closeBtn.addEventListener('click', function() {
                videoModal.style.display = 'none';
                youtubeVideo.src = '';
            });
    
            window.addEventListener('click', function(event) {
                if (event.target == videoModal) {
                    videoModal.style.display = 'none';
                    youtubeVideo.src = '';
                }
            });
        });
    </script>
</body>

</html>