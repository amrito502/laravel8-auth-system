@extends('app.app_master')
@section('app_content')
@include('app.components.banner.other_page_banner')
<div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
    <h6 class="position-relative d-inline text-primary ps-4">
        Services Details
    </h6>
    <h2 class="mt-2">services</h2>
</div>



@include('app.components.services.service_details')

@endsection


