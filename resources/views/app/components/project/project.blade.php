  <!-- ============Portfolio Start============ -->
  <div class="container-xxl py-5">
      <div class="container px-lg-5">
          <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
              <h6 class="position-relative d-inline text-primary ps-4">
                  Our Projects
              </h6>
              <h2 class="mt-2">Recently Launched Projects</h2>
          </div>
          <div class="row g-4 portfolio-container">

              @forelse ($projects as $project)
                  <div class="col-lg-4 col-md-6 portfolio-item first wow zoomIn" data-wow-delay="0.1s">
                      <div class="position-relative rounded overflow-hidden">
                        <img src="{{ asset('images/projects/' . $project->image) }}" style="width: 100%!important; height: 260px;" alt="img" />
                          <div class="portfolio-overlay">
                              <a class="btn btn-light project_display_img" href="{{ asset('images/projects/' . $project->image) }}"
                                  data-lightbox="portfolio">
                                  <i class="fa fa-plus fa-2x text-primary">
                                  </i>
                              </a>
                              <div class="mt-auto">
                                  <small class="text-white">
                                      <i class="fa fa-folder me-2"></i>{{ $project->name }}
                                  </small>
                                  <a class="h5 d-block text-white mt-1 mb-0" href="">{{ $project->title }}
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
              @empty
              @endforelse


          </div>
      </div>
  </div>
  <!-- ============Portfolio End============ -->
