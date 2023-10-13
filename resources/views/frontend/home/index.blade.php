  @extends('frontend.layouts.app')
  @section('content')
      <!--hero section start-->
      <section
          class="hero-section position-relative min-vh-100 background-video-overly flex-column d-flex justify-content-center">
          <video poster="{{ asset('assets/frontend/assets/video/poliwangi.mp4') }}"
              class="fit-cover w-100 h-100 position-absolute z--1" autoplay="" muted="" loop="" id="myVideo">
              <source src="{{ asset('assets/frontend/assets/video/poliwangi.mp4') }}" type="video/mp4">
          </video>
          <div class="container">
              <div class="row align-items-center justify-content-center">
                  <div class="col-md-8 col-lg-8">
                      <div class="hero-content-left text-white">
                          <h1 class="text-white display-4 font-weight-bolder">Great ideas are the fuel of progress
                          </h1>
                          <p class="lead mb-4">Jurusan Bisnis dan Informatika siap untuk menyiapkan generasi menghadapi kemajuan
                              dengan memberi wadah dalam mempelajari dan mendalami teknologi.
                              Dengan upaya menerapkan penyaluran kreatifitas dan kemampuan dalam pengarahan namun tanpa
                              batasan. </p>
                          {{-- <a href="#" class="btn btn-brand-01 btn-lg"><i class="far fa-comments mr-2"></i>
                              Start a live chat</a> --}}
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!--hero section end-->

      <!--hosting promo start-->
      <section class="promo-section mt-n-150 ">
          <div class="container">
              <div class="row">
                  <div class="col-md-6 col-lg-4">
                      <div class="card hosting-promo border-0 rounded-custom p-4 mt-4 shadow">
                          <div class="card-body">
                              <div class="hosting-promo-icon mb-3 d-flex justify-content-between">
                                  <span class="fad fa-clouds icon-size-lg color-primary"></span>
                              </div>
                              <div class="hosting-promo-content">
                                  <h5 class="h6">Pengumuman</h5>
                                  <p>Temukan pengumuman dan informasi mengenai jurusan disini.</p>
                                  <a href="#" target="_blank" class="small-text d-inline-flex align-items-center">
                                      <span>Read More</span> <i class="fad fa-arrow-right ml-2"></i>
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-4">
                      <div class="card hosting-promo border-0 rounded-custom p-4 mt-4 shadow">
                          <div class="card-body">
                              <div class="hosting-promo-icon mb-3 d-flex justify-content-between">
                                  <span class="fad fa-hdd icon-size-lg color-primary"></span>
                              </div>
                              <div class="hosting-promo-content">
                                  <h5 class="h6">Event Jurusan</h5>
                                  <p>Temukan semua event atau agenda jurusan disini.</p>
                                  <a href="#" target="_blank" class="small-text d-inline-flex align-items-center">
                                      <span>Read More</span> <i class="fad fa-arrow-right ml-2"></i>
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-4">
                      <div class="card hosting-promo border-0 rounded-custom p-4 mt-4 shadow">
                          <div class="card-body">
                              <div class="hosting-promo-icon mb-3 d-flex justify-content-between">
                                  <span class="fad fa-envelope icon-size-lg color-primary"></span>
                              </div>
                              <div class="hosting-promo-content">
                                  <h5 class="h6">Kabar Jurusan</h5>
                                  <p>Temukan segala update informasi mengenai jurusan disini.</p>
                                  <a href="#" target="_blank" class="small-text d-inline-flex align-items-center">
                                      <span>Read More</span> <i class="fad fa-arrow-right ml-2"></i>
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!--hosting promo end-->

      <!--feature section tab style start-->
      <section id="about" class="about-section position-relative overflow-hidden ptb-100 ">
          <div class="container">
              <div class="row align-items-center justify-content-between">
                  <div class="col-md-12 col-lg-6">
                      <div class="feature-contents section-heading">
                          <h2>Jurusan Bisnis dan Infomatika</h2>
                          <p>Jurusan Bisnis dan Infomatika merupakan jurusan yang berhubungan dengan sistem informasi, ilmu
                              komputer, ilmu informasi, teknik komputer dan aplikasi informasi dalam sistem informasi
                              manajemen. Termasuk di dalamnya kemampuan dalam menganalisis, menilai, memahami, menerapkan
                              dan menciptakan sebuah program perangkat lunak atau software untuk mengolahnya dengan
                              komputer.</p>

                          <ul class="check-list-wrap list-two-col py-3">
                              <li>D4 Teknologi Rekayasa Perangkat Lunak</li>
                              <li>D4 Teknik Rekayasa Komputer</li>
                              <li>D4 Bisnis Digital</li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-6">
                      <div class="image-wrap">
                          <img class="img-fluid" src="{{ asset('assets/frontend/assets/img/ti2.jpg ') }}"
                              alt="animation image" style="border-radius: 20px">
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!--feature section tab style end-->

      <!--call to action start-->
      <section class="ptb-60 primary-bg">
          <div class="container">
              <div class="row align-items-center justify-content-between">
                  <div class="col-md-7 col-lg-6">
                      <div class="cta-content-wrap text-white">
                          <h2 class="text-white">Daftarkan Dirimu <br> Sekarang</h2>
                          <p>Jadilah ahli IT professional dengan belajar bersama kami Jurusan Bisnis dan Infomatika Poliwangi. Kami
                              mempunyai slogan Aktif Optimis Solid. </p>
                      </div>
                      <div class="action-btns mt-4">
                          <a href="#" class="btn btn-brand-03"> Daftar Mahasiswa Baru </a>
                      </div>
                  </div>
                  <div class="col-md-5 col-lg-4">
                      <div class="cta-img-wrap text-center">
                          <img src="{{ asset('assets/frontend/assets/img/cta-new.svg') }}" class="img-fluid"
                              alt="server room">
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!--call to action end-->


      <!--testimonial section start-->
      <section class="review-section ptb-100 ">
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-md-10 col-lg-7">
                      <div class="section-heading text-center">
                          <h2>Berita</h2>
                          <p>Berita Jurusan Bisnis dan Infomatika Politeknik Negeri Banyuwangi. </p>
                      </div>
                  </div>
              </div>
              <div class="row justify-content-center">
                  @foreach (getEvents(4) as $item)
                      <div class="col-md-6 col-lg-4">
                          <a class="single-blog-article rounded bg-white border d-block mt-4"
                              href="{{ url('event/' . $item->slug) }}">
                              <div class="blog-img mb-2">
                                  <img src="{{ asset('storage/images/events/' . $item->thumbnail) }}"
                                      class="rounded-top img-fluid" alt="blog">
                              </div>
                              <div class="blog-content-wrap p-4">
                                  <div class="article-heading">
                                      <h3 class="h5 mb-0">{{ $item->title }}</h3>
                                      <span>
                                          {{ Carbon\Carbon::parse($item->date_start)->isoFormat('dddd, D MMMM Y') }}</span>
                                  </div>
                                  <span class="border-shape my-3"></span>
                                  <p>{{ substr($item->summary, 0, 100) }}... </p>
                                  <div class="article-footer d-flex align-items-center justify-content-between">
                                  </div>
                              </div>
                          </a>

                      </div>
                  @endforeach
              </div>
          </div>
      </section>
      <!--testimonial section end-->

      <!--application hosting section start-->
      <section class="appliction-hosting ptb-100 gray-light-bg">
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-md-9 col-lg-8">
                      <div class="section-heading text-center mb-5">
                          <h2>Partner Kami</h2>
                          <p class="lead">Kami telah berpartner dengan berbagai industri dan instansi guna meningkatkan
                              kualitas SDM yang kami miliki.</p>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-12">
                      <div class="application-hosting-wrap">
                          <ul class="app-list">
                            <li><a href="https://www.stust.edu.tw/en/" class="white-bg"><img
                                src="{{ asset('assets/frontend/assets/img/1.png') }}" alt="icon">
                        </a></li>
                    <li><a href="https://www.kosen-k.go.jp/english/" class="white-bg"><img
                                src="{{ asset('assets/frontend/assets/img/2.png') }}" alt="icon">
                        </a></li>
                    <li><a href="https://wfcp.org/members/yangzhou-polytechnic/" class="white-bg"><img
                                src="{{ asset('assets/frontend/assets/img/3.png') }}" alt="icon">
                        </a></li>
                    <li><a href="https://www.czimt.edu.cn/" class="white-bg"><img
                                src="{{ asset('assets/frontend/assets/img/4.jpg') }}" alt="icon">
                        </a></li>
                    <li><a href="https://www.atilim.edu.tr/en" class="white-bg"><img
                                src="{{ asset('assets/frontend/assets/img/5.png') }}" alt="icon">
                        </a></li>
                    <li><a href="https://www.pusan.ac.kr/eng/Main.do" class="white-bg"><img
                                src="{{ asset('assets/frontend/assets/img/6.png') }}" alt="icon">
                        </a></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!--application hosting section end-->
  @endsection
