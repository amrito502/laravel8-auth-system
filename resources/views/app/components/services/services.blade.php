 <!-- ======= Services Section ======= -->
 <section id="services" class="services">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h2 class="sec_title_name">Services</h2>
            <p class="sec_title_t">Veritatis et dolores facere numquam et praesentium</p>
        </header>

        <div class="row gy-4">
            @forelse ($services as $service_item)
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-box blue">
                    {{-- <i class="ri-discuss-line icon"></i> --}}
                    <i class="fa-brands fa-servicestack icon"></i>
                    <h3>{{ $service_item->name }}</h3>
                    <p style="font-size: 17px;font-family: 'Roboto';">{{ $service_item->title }}</p>
                    <a href="" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            @empty

            @endforelse

        </div>

    </div>

</section>
<!-- End Services Section -->
