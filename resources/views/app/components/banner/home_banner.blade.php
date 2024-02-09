<!DOCTYPE html>
<html lang="en">
<head>
<style>
    .hero-section{
    background: linear-gradient(1deg, rgb(4 4 4 / 230%), rgb(23 255 171 / 77%)), url(admin/images/others/bann.jpg);
    background-repeat: no-repeat;
    background-size: cover;
}

</style>
</head>
<body>
    <section class="hero-section hero-section-full-height">
        <div class="container-fluid">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-12 col-12 p-0">
                        <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @forelse ($hero as $item)
                                <div class="carousel-item active">
                                    <div class="row py-5 main_hero_body">
                                        <div class="col-md-7">
                                            <div class="hero_left" data-aos="fade-right">
                                                <h1 class="hero_title_name">{{ $item->name }}</h1>
                                                <h3 class="hero_title">I Provide <span id="auto_type_hero"
                                                        class="auto-type"></span></h3>
                                                <p class="hero_desc">{{ $item->description }}</p>
                                                <a href="" class="custom-btn custom-border-btn btn hire_me_btn">Get Started</a>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="hero_right" data-aos="fade-left">
                                                <img src="{{ asset('images/hero/'.$item->image) }}" alt="hero" class="right_hero_img">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @empty

                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</body>
</html>
