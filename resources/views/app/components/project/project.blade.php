
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Portfolio</h2>
                <p>Check our latest work</p>
            </header>

            <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                @forelse ($projects as $item)
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('images/projects/' . $item->image) }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>{{ $item->name }}</h4>
                            <p>{{ $item->title }}</p>
                            <div class="portfolio-links">
                                <a href="" data-gallery="portfolioGallery"
                                    class="portfokio-lightbox" title="More Details"><i class="bi bi-plus"></i></a>
                                <a href="portfolio-details.html" title="Website Link"><i class="bi bi-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @empty

                @endforelse


            </div>

        </div>

    </section>

    <!-- End Portfolio Section -->
