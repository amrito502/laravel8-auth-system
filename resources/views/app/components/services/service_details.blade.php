<section class="service_details">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="service">
                    <img src="{{ asset('images/services/' . $service->image) }}" style="width: 100%!important;" alt="img" />
                    <div class="services_content">
                        <p class="service_date"><i class="fa fa-calendar"></i> <a href="#"><span class="">{{ $service->created_at }}</span></a></p>
                        <h3 class="service_d_name">{{ $service->service_name }}</h3>
                        <h6 class="service_d_title">{{ $service->service_title }}</h6>
                        <p class="service_d_desc">{{ $service->description }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="ad">
                    <p>Show Ad</p>
                </div>
            </div>
        </div>
    </div>
</section>



