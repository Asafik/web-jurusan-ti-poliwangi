@extends('frontend.layouts.app')
@section('content')
    <!--page header section start-->
    <section class="page-header-section ptb-120 gradient-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading text-center text-white">
                        <h2 class="text-white">Prestasi Mahasiswa</h2>
                        <p class="lead">Prestasi Mahasiswa Jurusan Bisnis dan Informatika</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--page header section end-->
    <section class="our-partner-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row">
                @foreach ($achievements as $item)
                    @if ($item->achievement->count() > 0)
                        <div class="col-md-12">
                            <div class="section-heading mt-4">
                                <h3>{{ $item->date }}</h3>
                            </div>
                        </div>
                        @foreach ($item->achievement as $achievement)
                            <div class="col-md-4 col-lg-3 mt-4">
                                <div class="single-game-hosting">
                                    <span class="img-overlay"></span>
                                    <img src="{{ asset('/storage/images/prestasi/achievement/' . $achievement->image) }}" alt="game"
                                        class="img-fluid"
                                        style="width: 100% !important;height: 360px !important;object-fit: cover !important;">
                                    <div class="game-hosting-name">
                                       <h3 class="mb-0 h6">{{$achievement->title}}</h3>
                                       <h3 class="mb-0 h6">{{$achievement->location}}</h3>
                                    </div>
                                   
                                </div>
                            </div>
                        @endforeach
                    @endif
                @endforeach
            </div>
        </div>
    </section>

@endsection