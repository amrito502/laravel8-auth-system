 <!-- ============Service Start============ -->
 <div class="container-xxl py-5">
    <div class="container px-lg-5">
        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="position-relative d-inline text-primary ps-4">
                Our Services
            </h6>
            <h2 class="mt-2">What Solutions We Provide</h2>
        </div>
        <div class="row g-4">
            @forelse ($services as $key=>$service)
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <h2 class="service_icon">{{ $key+1 }}</h2>
                    </div>
                    <h5 class="mb-3">{{ $service->service_name }}</h5>
                    <p>
                        {{ $service->service_title }}
                    </p>
                    <a class="btn px-3 mt-auto mx-auto" href="{{ route('app.services.details',$service->id) }}">Read More</a>
                </div>
            </div>
            @empty

            @endforelse


        </div>
    </div>
</div>
<!-- ============Service End============ -->
