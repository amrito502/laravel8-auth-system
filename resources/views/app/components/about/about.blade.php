
    <!-- ======= About Section ======= -->
    <section id="about" class="about cus_about">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>About Me</h2>
                <p>Who We Are?</p>
            </header>
            @forelse ($about as $about_item)
            <div class="row gx-0">

                <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
                        <h3 class="about_title_cus">Who We Are</h3>
                        <h2 class="about_heading_cus">{{ $about_item->title }}</h2>
                        <p class="about_desc_cus">
                           {{ $about_item->description }}
                        </p>
                        <div class="text-center text-lg-start">
                            <a href="#"
                                class="about_hire_me_cus btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Hire Me</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('images/about/'.$about_item->image) }}" alt="about" class="img-fluid">
                </div>

            </div>
            @empty

            @endforelse

        </div>

    </section>
    <!-- End About Section -->
