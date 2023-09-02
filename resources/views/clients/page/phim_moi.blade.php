@extends('clients.share.master')
@section('content')
    <section class="container__movie">
        <div class="container__movie-item">
            <h2 class="container__movie-phim-noi-bat" style="font-weight: 600; padding: 1.5rem 0">Phim Mới Nổi Bật</h2>
            <div class="swiper mySlideMovie">
                <div class="swiper-wrapper">
                    @foreach ($list_phim_moi_noi_bat as $value)
                        <div class="swiper-slide">
                            <a href="/chi-tiet-phim/{{ $value->slug_ten_phim }}-{{ $value->id }}"
                                title="{{ $value->ten_phim }}">
                                <div class="scale">
                                    <img src="{{ $value->hinh_anh }}" alt="{{ $value->ten_phim }}"
                                        srcset="{{ $value->hinh_anh }}">
                                </div>
                                <div class="movie-title">
                                    <p>{{ $value->ten_phim }}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>
    <section class="container">
        <h1 style="color: #fff; padding: 1.5rem 0; font-weight: 600; font-size: 3rem">Phim Mới</h1>
        <div class="container__phim__moi" align="center">
            @foreach ($list_phim_moi as $value)
                <div class="container__phim__moi-item">
                    <a href="/chi-tiet-phim/{{ $value->slug_ten_phim }}-{{ $value->id }}" title="{{ $value->ten_phim }}">
                        <div class="container__phim__moi-img">
                            <img src="{{ $value->hinh_anh }}" alt="{{ $value->ten_phim }}">
                        </div>
                        <div class="container__phim_moi-title">
                            <p>{{ $value->ten_phim }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>
@endsection
@section('js')
@endsection
