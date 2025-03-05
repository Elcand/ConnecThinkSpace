@extends('component.layout')

@section('title', 'Home')

@section('content')
    <section class="wrapper vh-100 d-flex align-items-center text-center text-white position-relative" id="home">
        <div class="swiper-fullscreen nav-dark w-100 h-100">
            <div class="swiper w-100 h-100">
                <div class="swiper w-100 h-100">
                    <div class="swiper-slide bg-dark bg-overlay-600"
                        style="background-image: url('{{ asset(
                            isset($hero) && $hero->image
                                ? (Str::startsWith($hero->image, 'hero/')
                                    ? 'storage/' . $hero->image
                                    : 'assets/img/' . $hero->image)
                                : 'assets/img/default.png',
                        ) }}');
                    background-size: cover; background-position: center;">
                    </div>
                </div>
            </div>
            <div class="position-absolute top-50 start-50 translate-middle w-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <h1 class="fs-35 text-uppercase fw-bold text-white">Welcome to</h1>
                            <h2 class="display-3 fs-65 fw-bold text-white">
                                {{ !empty($hero->name) ? $hero->name : 'ConnecThink Space' }}</h2>
                            <p class="display-3 fs-20 text-white">
                                {{ $hero->slogan }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('studio')
    @include('contact')
@endsection
