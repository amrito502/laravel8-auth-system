<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .portfolio{}
        .portfolio-item{}
        .project_img{
            width: 100%!important;
            height: 300px;
        }
        .project_name{}
        .project_title{}
        .portfolio-links{}
    </style>
</head>
<body>
    <section id="portfolio" class="portfolio">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Projects</h2>
                <p>Check our latest work</p>
            </header>

            <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                @forelse ($projects as $item)
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('images/projects/' . $item->image) }}" class="img-fluid project_img" alt="">
                        <div class="portfolio-info">
                            <h4 class="project_name">{{ $item->name }}</h4>
                            <p class="project_title">{{ $item->title }}</p>
                            <div class="portfolio-links">
                                <a href="{{ url('project-details/'.$item->slug ) }}"  data-gallery="portfolioGallery" class="portfokio-lightbox" title="More Details"><i class="bi bi-plus"></i></a>
                                <a href="{{ $item->website_link }}" target="_blank" title="Website Link"><i class="bi bi-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @empty

                @endforelse
            </div>

        </div>

    </section>
</body>
</html>
