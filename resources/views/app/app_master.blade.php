<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> Hire Me | SEO Consultant | SEO Expert in Bangladesh | Zaman IT Consulting</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta
        content="hire me, SEO services in Bangladesh, SEO Consultant,technical seo,technical seo checklist, seo expert,seo experts, local seo experts, upwork seo, social media marketer,social media marketing services,Zaman IT Consulting,zamanitc"
        name="Keywords">
    <meta
        content="Need an SEO Expert in Bangladesh? Hire me, the experienced SEO Consultant ready to skyrocket your online visibility today!"
        name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link href="{{ asset('assets/img/favicon.ico') }}" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- main Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body class="bg-gray bg_body_img">

    <div class="container-xxl bg-white p-0">
        <!-- =======Spinner Start======= -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- =======Spinner End======= -->

        <!-- ==========Navbar & Hero Start========== -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0">
                        Zaman IT
                        <span class="fs-5 text-danger">Consulting</span>
                    </h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{ route('app.home') }}" class="nav-item nav-link">Home</a>
                        <a href="{{ route('app.about') }}" class="nav-item nav-link">About</a>
                        <a href="{{ route('app.services') }}" class="nav-item nav-link">Service</a>
                        <a href="{{ route('app.project') }}" class="nav-item nav-link">Project</a>
                        <a href="{{ route('app.teams') }}" class="nav-item nav-link">Our Team</a>
                        <a href="{{ route('app.blogs') }}" class="nav-item nav-link">Blogs</a>
                        <a href="{{ route('app.contact') }}" class="nav-item nav-link">Contact</a>
                    </div>
                    <butaton type="button" class="btn text-secondary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal">
                        <i class="fa fa-search">
                        </i>
                    </butaton>
                    <a href="https://www.upwork.com/freelancers/~015157301e2ac694dc?fbclid=IwAR3vYox7L-R_0VzgpyxjfJ2G23PWlBpZTtpKMzKTwS1bxNB7vv-LV97h6O4"
                        class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3" target="_blank">Hire Me
                    </a>
                </div>
            </nav>
            {{-- ======= banner========== --}}


            {{-- ========banner-end====== --}}
        </div>
        <!-- ==========Navbar & Hero End========== -->

        <!-- ============Full Screen Search Start============ -->
        <div class="modal fade" id="searchModal" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content" style="background: rgba(29, 29, 39, 0.7)">
                    <div class="modal-header border-0">
                        <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center justify-content-center">
                        <div class="input-group" style="max-width: 600px">
                            <input type="text" class="form-control bg-transparent border-light p-3"
                                placeholder="Type search keyword">
                            <button class="btn btn-light px-4">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============Full Screen Search End============ -->


        {{-- ============================================== --}}
        {{-- ============================================== --}}
            @yield('app_content')
        {{-- ============================================== --}}
        {{-- ============================================== --}}


          <!-- ============Footer Start============ -->
          <div class="container-fluid bg-primary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Get In Touch</h5>
                        <p>
                            <i class="fa fa-map-marker-alt me-3"></i>
                            Pani Masjid,
                            Mahishkhola, Narail
                        </p>
                        <p>
                            <i class="fa fa-phone-alt me-3"></i>+880 1751957700
                        </p>
                        <p>
                            <i class="fa fa-envelope me-3"></i>ashraf.nrl@gmail.com
                        </p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social"
                                href="https://twitter.com/Ashrafnarail?fbclid=IwAR3SiwgrJE79cPioilwgBuhdH5LtjkmcliGtvwDIZW8SZIqjfv5rZsHGnmw"
                                target="_blank">
                                <i class="fab fa-twitter">
                                </i>
                            </a>
                            <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/ZamanITcon"
                                target="_blank">
                                <i class="fab fa-facebook-f">
                                </i>
                            </a>
                            <a class="btn btn-outline-light btn-social" href="">
                                <i class="fab fa-youtube">
                                </i>
                            </a>
                            <a class="btn btn-outline-light btn-social" href="">
                                <i class="fab fa-instagram">
                                </i>
                            </a>
                            <a class="btn btn-outline-light btn-social"
                                href="https://www.linkedin.com/in/a-k-m-ashrafuzzaman-aba26028/">
                                <i class="fab fa-linkedin-in">
                                </i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Popular Link</h5>
                        <a class="btn btn-link" href="{{ route('app.about') }}">About Us</a>
                        <a class="btn btn-link" href="{{ route('app.contact') }}">Contact Us</a>
                        <a class="btn btn-link" href="{{ route('app.teams') }}">Team Members</a>
                        <a class="btn btn-link" href="{{ route('app.services') }}">Services</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Project Gallery</h5>
                        <div class="row g-2">
                            <div class="col-4">
                                <img class="img-fluid footer_img_cus" src="{{ asset('assets/img/go.jpeg') }}" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid footer_img_cus" src="{{ asset('assets/img/driftervans.png') }}"
                                    alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid footer_img_cus" src="{{ asset('assets/img/3.png') }}" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid footer_img_cus" src="{{ asset('assets/img/projectgo.png') }}" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid footer_img_cus" src="{{ asset('assets/img/lishfood.png') }}" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid footer_img_cus" src="{{ asset('assets/img/portfolio-6.jpg') }}"
                                    alt="Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Newsletter</h5>
                        <p>Please submit Your Email.</p>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text"
                                placeholder="Your Email" style="height: 48px">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2">
                                <i class="fa fa-paper-plane text-primary fs-4"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container px-lg-5">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy;
                            <a class="border-bottom" href="https://zamanitc.com/">zamanitc.com
                            </a>
                            ,All Right Reserved. Developed By
                            <a class="border-bottom" href="https://zamanitc.com/">Akm Ashraf
                            </a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="{{ route('app.home') }}">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============Footer End============ -->

        <!-- ============Back to Top============ -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2">
            <i class="bi bi-arrow-up">
            </i>
        </a>

    </div>
















    <!-- ==========JavaScript Libraries========== -->
    <!-- ======================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/lib/lightbox/js/lightbox.min.js') }}"></script>
    <!-- main Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script type="text/javascript">
        $(".submit-form").click(function(e) {
            e.preventDefault();
            var data = $('#form-data').serialize();
            $.ajax({
                type: 'post',
                url: "{{ route('app.message.store') }}",
                data: data,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                beforeSend: function() {
                    $('#create_new').html('....Please wait');
                },
                success: function(response) {
                    alert(response.success);
                    $('#form-data').trigger("reset");
                },
                complete: function(response) {
                    $('#create_new').html('Send New Message');
                }
            });
        });
    </script>
</body>

</html>
