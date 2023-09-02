@extends('clients.share.master')
@section('content')
<section class="container__banner">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="/assets/img/banner/poster-phim-hanh-dong.jpg" alt=""
                    srcset="/assets/img/banner/poster-phim-hanh-dong.jpg">
            </div>
            <div class="swiper-slide">
                <img src="/assets/img/banner/poster-phim-hanh-dong.jpg" alt=""
                    srcset="/assets/img/banner/poster-phim-hanh-dong.jpg">
            </div>
            <div class="swiper-slide">
                <img src="/assets/img/banner/poster-phim-hanh-dong.jpg" alt=""
                    srcset="/assets/img/banner/poster-phim-hanh-dong.jpg">
            </div>
            <div class="swiper-slide">
                <img src="/assets/img/banner/poster-phim-hanh-dong.jpg" alt=""
                    srcset="/assets/img/banner/poster-phim-hanh-dong.jpg">
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
</section>
<section class="container__movie">
    <div class="container__movie-item">
        <h2 class="container__movie-phim-noi-bat" style="font-weight: 600;">Phim Đề Cử</h2>
        <div class="swiper mySlideMovie">
            <div class="swiper-wrapper">
                @foreach ($list_phim_1 as $key => $value)
                <div class="swiper-slide">
                    <a href="/chi-tiet-phim/{{$value->slug_ten_phim}}-{{$value->id}}" title="{{$value->ten_phim}}">
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
    <div class="container__movie-item">
        <h2 class="container__movie-phim-noi-bat" style="font-weight: 600;">Phim Nổi Bật</h2>
        <div class="swiper mySlideMovie">
            <div class="swiper-wrapper">
                @foreach ($list_phim_2 as $value)
                <div class="swiper-slide">
                    <a href="/chi-tiet-phim/{{$value->slug_ten_phim}}-{{$value->id}}" title="{{$value->ten_phim}}">
                        <div class="scale">
                            <img src="{{$value->hinh_anh}}" alt="{{$value->ten_phim}}"
                                srcset="{{$value->hinh_anh}}">
                        </div>
                        <div class="movie-title">
                            <p>{{$value->ten_phim}}</p>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
    <div class="container__movie-item">
        <h2 id="phimlemoinhat" class="container__movie-phim-noi-bat" style="font-weight: 600;">Phim Lẻ Mới Cập Nhật</h2>
        <div class="swiper mySlideMovie">
            <div class="swiper-wrapper">
                @foreach ($list_phim_3 as $value)
                <div class="swiper-slide">
                    <a href="/chi-tiet-phim/{{$value->slug_ten_phim}}-{{$value->id}}" title="{{$value->ten_phim}}">
                        <div class="scale">
                            <img src="{{$value->hinh_anh}}" alt="{{$value->ten_phim}}"
                                srcset="{{$value->hinh_anh}}">
                        </div>
                        <div class="movie-title">
                            <p>{{$value->ten_phim}}</p>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
    <div class="container__movie-item">
        <h2 class="container__movie-phim-noi-bat" style="font-weight: 600;">Phim Hoạt Hình</h2>
        <div class="swiper mySlideMovie">
            <div class="swiper-wrapper">
                @foreach ($list_phim_4 as $value)
                <div class="swiper-slide">
                    <a href="/chi-tiet-phim/{{$value->slug_ten_phim}}-{{$value->id}}" title="{{$value->ten_phim}}">
                        <div class="scale">
                            <img src="{{$value->hinh_anh}}" alt="{{$value->ten_phim}}"
                                srcset="{{$value->hinh_anh}}">
                        </div>
                        <div class="movie-title">
                            <p>{{$value->ten_phim}}</p>
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
@endsection
@section('js')

@endsection
