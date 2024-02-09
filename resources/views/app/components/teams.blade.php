
       <!-- ======= Team Section ======= -->
       <section id="team" class="team">
        <div class="container" data-aos="fade-up">

          <header class="section-header">
            <h2>My Team</h2>
            <p>Check our latest work</p>
        </header>

          <div class="row">

            @forelse ($teams as $item)

            <div class="col-lg-6 mb-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="member d-flex align-items-start">
                  <div class="pic"><img src="{{ asset('images/teams/' . $item->image) }}" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>{{ $item->name }}</h4>
                    <span>{{ $item->profession }}</span>
                    <p>{{ $item->about }}</p>
                    <div class="social">
                      <a href="{{ $item->twitter }}"><i class="fa-brands fa-twitter"></i></a>
                      <a href="{{ $item->facebook }}"><i class="fa-brands fa-facebook"></i></i></a>
                      <a href="{{ $item->instagram }}"><i class="fa-brands fa-square-instagram"></i></a>
                      <a href="{{ $item->linkedin }}"> <i class="fa-brands fa-linkedin"></i> </a>
                    </div>
                  </div>
                </div>
              </div>
            @empty

            @endforelse

          </div>

        </div>
      </section>
      <!-- End Team Section -->
