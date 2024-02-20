<section class="service_details">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="service">
                    <img src="{{ asset('images/projects/'.$project_dts->image) }}" style="width: 100%!important;" alt="img" />
                    <div class="services_content">
                        <p class="service_date"><span class="resources_date_icon"><i class="fa-solid fa-calendar-days"></i> {{ \Carbon\Carbon::parse($project_dts->created_at)->isoFormat('MMM Do YYYY') }}</span></p>
                        <h3 class="service_d_name">{{ $project_dts->name }}</h3>
                        <h6 class="service_d_title">{{ $project_dts->title }}</h6>
                        <p class="service_d_desc">{!! $project_dts->description !!}</p>
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