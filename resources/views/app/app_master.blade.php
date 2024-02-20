<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Onest:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/templatemo-kind-heart-charity.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

</head>

<body>
    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12 d-flex flex-wrap">
                    <p class="d-flex me-4 mb-0" data-aos="fade-up">
                        <i class="bi-geo-alt me-2"></i>
                        Pani Masjid, Mahishkhola, Narail
                    </p>

                    <p class="d-flex mb-0"  data-aos="fade-down">
                        <i class="bi-envelope me-2"></i>

                        <a href="mailto:info@company.com">info@zamanitc.com</a>
                    </p>
                </div>

                <div class="col-lg-3 col-12 ms-auto d-lg-block d-none">
                    <ul class="social-icon" data-aos="fade-right">
                        <li class="social-icon-item">
                            <a href="https://twitter.com/Ashrafnarail?fbclid=IwAR3SiwgrJE79cPioilwgBuhdH5LtjkmcliGtvwDIZW8SZIqjfv5rZsHGnmw" target="_blank" class="social-icon-link bi-twitter"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="https://www.facebook.com/ZamanITcon" target="_blank" class="social-icon-link bi-facebook"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="" target="_blank" class="social-icon-link bi-instagram"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="https://www.linkedin.com/in/a-k-m-ashrafuzzaman-aba26028/" target="_blank" class="social-icon-link bi-linkedin"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="" target="_blank" class="social-icon-link bi-whatsapp"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg bg-light shadow-lg">
        <div class="container" data-aos="fade-up">
            <a class="navbar-brand" href="{{ route('app.home') }}">
                <img src="{{ asset('assets/images/logo.png') }}" class="logo img-fluid" alt="Kind Heart Charity">
                <span>
                    Zaman IT
                    <small>Consulting</small>
                </span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="{{ route('app.home') }}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="{{ route('app.services') }}">Services</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="{{ route('app.project') }}">Projects</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="{{ route('app.teams') }}">Teams</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="{{ route('app.guestpost') }}">Guest Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="{{ route('app.resources') }}">My Resources</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="{{ route('app.blogs') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="{{ route('app.contact') }}">Contact</a>
                    </li>

                    <li class="nav-item ms-3">
                        <a class="nav-link custom-btn custom-border-btn btn" target="_blank" href="https://www.upwork.com/freelancers/~015157301e2ac694dc">Hire Me</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>









    @yield('app_content')








<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class=" d-flex align-items-center">
              <!-- <img src="assets/img/logo.png" alt=""> -->
            <h2>
                Zaman IT
                <span style="color: #5BC2AE;">Consulting</span>
            </h2>
            </a>
            <p>Hire an experienced SEO consultant from a reputable IT Company in Bangladesh. Collaborate with a talented freelancer to achieve your digital goals.</p>
            <div class="social-links mt-3">
              <a href="https://twitter.com/Ashrafnarail?fbclid=IwAR3SiwgrJE79cPioilwgBuhdH5LtjkmcliGtvwDIZW8SZIqjfv5rZsHGnmw" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="https://www.facebook.com/ZamanITcon" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="https://www.linkedin.com/in/a-k-m-ashrafuzzaman-aba26028/" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="{{ route('app.home') }}">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{ route('app.services') }}">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">SEO Consultant</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Digital Marketing</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Software Development</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
                Pani Masjid, Mahishkhola, Narail <br>
              <strong>Phone:</strong> +880 1751957700<br>
              <strong>Email:</strong> info@zamanitc.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Zaman IT</span> Consulting</strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://zamanitc.com/">A.K.M. Ashrafuzzaman</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- cdn js -->
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>

    <!-- ===================== -->

  <script src="{{ asset('assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->

    <!-- <script src="assets/js/jquery.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js') }}" integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();

        AOS.init({
            // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
            offset: 120, // offset (in px) from the original trigger point
            delay: 0, // values from 0 to 3000, with step 50ms
            duration: 2000, // values from 0 to 3000, with step 50ms
            easing: 'ease', // default easing for AOS animations
            once: false, // whether animation should happen only once - while scrolling down
            mirror: false, // whether elements should animate out while scrolling past them
            anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

        });
    </script>
    <script>
        var typed = new Typed(".auto-type", {
            strings: ["SEO Consultant", "IT Consultant", "SEO Service"],
            typeSpeed: 150,
            backSpeed: 150,
            loop: true,
        });

        function logo_carouselInit() {
            $('.owl-carousel.logo_active').owlCarousel({
                dots: false,
                loop: true,
                margin: 30,
                stagePadding: 2,
                smartSpeed: 1000,
                autoplay: true,
                autoplayTimeout: 1500,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 2
                    },
                    576: {
                        items: 3,
                    },
                    768: {
                        items: 4,
                    },
                    992: {
                        items: 5
                    }
                }
            });
        }
        logo_carouselInit();
    </script>

</body>

</html>
