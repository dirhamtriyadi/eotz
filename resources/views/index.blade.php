<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>{{ config('app.name') }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('arsha/assets') }}/img/favicon.png" rel="icon">
    <link href="{{ asset('arsha/assets') }}/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('arsha/assets') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('arsha/assets') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('arsha/assets') }}/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('arsha/assets') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('arsha/assets') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('arsha/assets') }}/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Arsha
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Updated: Jun 06 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="{{ route('index') }}" class="logo d-flex align-items-center me-auto">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="{{ asset('arsha/assets') }}/img/logo.png" alt=""> -->
                <h1 class="sitename">{{ config('app.name') }}</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#home" class="active">Home</a></li>
                    <li><a href="#artikel">Artikel</a></li>
                    <li><a href="#ternak">Ternak</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted" href="{{ route('login') }}">Login</a>

        </div>
    </header>

    <main class="main">

        <!-- Home Section -->
        <section id="home" class="hero section">

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center"
                        data-aos="zoom-out">
                        <h1>Better Solutions For Your Business</h1>
                        <p>We are team of talented designers making websites with Bootstrap</p>
                        <div class="d-flex">
                            <a href="#about" class="btn-get-started">Get Started</a>
                            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
                                class="glightbox btn-watch-video d-flex align-items-center"><i
                                    class="bi bi-play-circle"></i><span>Watch Video</span></a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
                        <div id="carouselExampleIndicators" class="carousel slide">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                                    aria-label="Slide 4"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                                    aria-label="Slide 5"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://d1bpj0tv6vfxyp.cloudfront.net/articles/787551_9-5-2021_16-30-4.webp"
                                        class="d-block w-100" alt="kenari">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://asset.kompas.com/crops/ywerGhcgmmGpbWVsF7z3bEd56dU=/102x57:936x613/1200x800/data/photo/2022/10/31/635fad77154d1.jpg"
                                        class="d-block w-100" alt="kenari">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://www.blibli.com/friends-backend/wp-content/uploads/2023/03/B300235-Cover-Fakta-Burung-Kenari.jpg"
                                        class="d-block w-100" alt="kenari">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://assets.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/2022/09/18/2302796875.jpg"
                                        class="d-block w-100" alt="kenari">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2021/07/16081847/Cara-Merawat-Burung-Kenari-Agar-Suaranya-Merdu.jpg"
                                        class="d-block w-100" alt="kenari">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        {{-- <img src="{{ asset('arsha/assets') }}/img/hero-img.png" class="img-fluid animated"
                            alt=""> --}}
                    </div>
                </div>
            </div>

        </section><!-- /Home Section -->

        <!-- Artikel Section -->
        <section id="artikel" class="about section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Artikel</h2>
                <p>List cara merawat ternak</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    @forelse ($artikels as $artikel => $data)
                        <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                            <div class="about-content">
                                <h3>{{ $data->judul }}</h3>
                                {{-- <p>{!! substr($data->isi, 0, 30) !!}</p> --}}
                                <a href="{{ route('artikel.show', $data->id) }}" class="read-more"><span>Read
                                        More</span><i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    @empty
                        <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                            <div class="about-content">
                                <h3>Kosong</h3>
                                <p>kosong</p>
                                <a href="#" class="read-more"><span>Read More</span><i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    @endforelse

                </div>

            </div>

        </section><!-- /Artikel Section -->

        <!-- Ternak Section -->
        <section id="ternak" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Ternak</h2>
                <p>List ternak dari peternak terbaik kami!</p>
            </div><!-- End Section Title -->

            <div class="container">
                <div class="mb-3">
                    <div class="row">
                        <div class="col">
                            <form action="{{ route('index') }}" method="GET">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="search" placeholder="Cari ternak berdasarkan nomor ring" value="{{ $search ? $search : '' }}" {{ $search ? 'autofocus' : '' }}>
                                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Cari</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row gy-4">

                    @forelse ($ternaks as $ternak => $data)
                        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                            <div class="service-item position-relative">
                                <h4><a href="#" class="stretched-link">{{ $data->seri_burung }}</a></h4>
                                <p>
                                    <strong>Peternak:</strong> {{ $data->user->name }}<br>
                                    <strong>Nomor Ring:</strong> {{ $data->nomor_ring }}<br>
                                    <strong>Jenis Kelamin:</strong> {{ $data->jenis_kelamin }}<br>
                                    <strong>Umur:</strong> {{ $data->umur() }}<br>
                                    <strong>Tanggal Netas:</strong> {{ $data->tanggal_netas }}<br>
                                    <strong>Indukan Jantan:</strong> {{ $data->indukan_jantan }}<br>
                                    <strong>Seri Indukan Jantan:</strong> {{ $data->seri_indukan_jantan }}<br>
                                    <strong>Indukan Betina:</strong> {{ $data->indukan_betina }}<br>
                                    <strong>Seri Indukan Betina:</strong> {{ $data->seri_indukan_betina }}<br>
                                </p>
                            </div>
                        </div><!-- End Service Item -->
                    @empty
                        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                            <div class="service-item position-relative">
                                <div class="icon"><i class="bi bi-activity icon"></i></div>
                                <h4><a href="#" class="stretched-link">Lorem Ipsum</a></h4>
                                <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                            </div>
                        </div><!-- End Service Item -->
                    @endforelse

                </div>

            </div>

        </section><!-- /Ternak Section -->

    </main>

    <footer id="footer" class="footer">

        <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-6">
                        <h4>Join Our Newsletter</h4>
                        <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
                        <form action="forms/newsletter.php" method="post" class="php-email-form">
                            <div class="newsletter-form"><input type="email" name="email"><input type="submit"
                                    value="Subscribe"></div>
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="d-flex align-items-center">
                        <span class="sitename">{{ config('app.name') }}</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>A108 Adam Street</p>
                        <p>New York, NY 535022</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                        <p><strong>Email:</strong> <span>info@example.com</span></p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12">
                    <h4>Follow Us</h4>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                    <div class="social-links d-flex">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Arsha</strong> <span>All Rights Reserved</span>
            </p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('arsha/assets') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('arsha/assets') }}/vendor/php-email-form/validate.js"></script>
    <script src="{{ asset('arsha/assets') }}/vendor/aos/aos.js"></script>
    <script src="{{ asset('arsha/assets') }}/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('arsha/assets') }}/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('arsha/assets') }}/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="{{ asset('arsha/assets') }}/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('arsha/assets') }}/vendor/isotope-layout/isotope.pkgd.min.js"></script>

    <!-- Main JS File -->
    <script src="{{ asset('arsha/assets') }}/js/main.js"></script>

</body>

</html>
