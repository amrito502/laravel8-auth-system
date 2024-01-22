<!-- ============Team Start============ -->
<div class="container-xxl py-5">
    <div class="container px-lg-5">
        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="position-relative d-inline text-primary ps-4">
                Our Team
            </h6>
            <h2 class="mt-2">Meet Our Team Members</h2>
        </div>
        <div class="row g-4">
            @forelse ($teams as $team)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <div class="d-flex">
                        <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5"
                            style="width: 75px">
                            <a class="btn btn-square text-primary bg-white my-1"
                                href="{{ $team->facebook }}" target="_blank">
                                <i class="fab fa-facebook-f">
                                </i>
                            </a>
                            <a class="btn btn-square text-primary bg-white my-1"
                                href="{{ $team->twitter }}"
                                target="_blank">
                                <i class="fab fa-twitter">
                                </i>
                            </a>
                            <a class="btn btn-square text-primary bg-white my-1" href="{{ $team->instagram }}"  target="_blank">
                                <i class="fab fa-instagram">
                                </i>
                            </a>
                            <a class="btn btn-square text-primary bg-white my-1"
                                href="{{ $team->linkedin }}"
                                target="_blank">
                                <i class="fab fa-linkedin-in">
                                </i>
                            </a>
                        </div>
                        <img class="img-fluid team_img rounded w-100" src="{{ asset('images/teams/' . $team->image) }}"
                            alt="">
                    </div>
                    <div class="px-4 py-3">
                        <h5 class="fw-bold m-0">{{ $team->name }}</h5>
                        <small>{{ $team->profession }}</small>
                    </div>
                </div>
            </div>
            @empty

            @endforelse


        </div>
    </div>
</div>
<!-- ============Team End============ -->
