  @extends('frontend.layouts.app')
  @section('content')
      <!--hero section start-->
        <section class="ptb-120 gradient-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-8">
                    <div class="hero-content-wrap text-white text-center position-relative">
                        <h1 class="text-white">Dosen dan Staff</h1>
                        <p class="lead">Jurusan Bisnis Dan Infomatika Politeknik Negeri Banyuwangi.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
      <!--hero section end-->

      <!--our partners section start-->
      <section class="our-partner-section ptb-100 gray-light-bg">
          <div class="container">
              <div class="row">
                  @foreach ($employees as $item)
                      @if ($item->employee->count() > 0)
                          <div class="col-md-12">
                              <div class="section-heading mt-4">
                                  <h3>{{ $item->name }}</h3>
                              </div>
                          </div>
                          @foreach ($item->employee as $employee)
                              <div class="col-md-4 col-lg-3 mt-4">
                                  <div class="single-game-hosting">
                                      <span class="img-overlay"></span>
                                      <img src="{{ asset('storage/images/employees/' . $employee->image) }}" alt="game"
                                          class="img-fluid"
                                          style="width: 100% !important;height: 360px !important;object-fit: cover !important;">
                                      <div class="game-hosting-name">
                                          <h3 class="mb-0 h6">{{ $employee->name }}</h3>
                                          <span>{{ $item->name }}</span>
                                          <a href="{{ url('detail/' . $employee->slug) }}" class="btn btn-brand-03 btn-sm btn-block">Detail</a>
                                      </div>
                                  </div>
                              </div>
                          @endforeach
                      @endif
                  @endforeach
              </div>
          </div>
      </section>
      <!--our partners section end-->
  @endsection
