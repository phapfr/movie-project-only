@extends('clients.share.master')
@section('content')
<section class="container">
    <div class="container__title">
        <span style="color: #7aa6ce;">Phim Hay</span> <span style="color: gray;">>></span>
        <span style="color: #7aa6ce;">{{ isset($detail_phim) ? $detail_phim->quoc_gia : '' }}</span> <span style="color: gray;">>></span>
        <span style="color: gray;">{{ isset($detail_phim) ? $detail_phim->ten_phim : '' }}</span>
    </div>
    <div class="container__detail-movie">
        <div class="container__detail-img">
            <a href="{{ route('phim',['slug'=>$detail_phim->slug_ten_phim]) }}">
                <img src="{{ isset($detail_phim) ? $detail_phim->hinh_anh : '' }}" alt="{{ isset($detail_phim) ? $detail_phim->ten_phim : '' }}">
            </a>
            <div class="container__detail-button" align="center">
                <a href="{{ route('trailer',['slug'=>$detail_phim->slug_ten_phim]) }}">
                    <button class="trailer"><span>Trailer</span></button>
                </a>
                <a href="{{ route('phim',['slug'=>$detail_phim->slug_ten_phim]) }}">
                    <button class="xem-phim">
                        <span>
                            Xem Phim
                        </span>
                    </button>
                </a>
            </div>
        </div>
        <div class="container__detail-title">
            <h3 style="color: #ffed4d; font-weight: 500">{{ isset($detail_phim) ? $detail_phim->ten_phim : '' }}</h3>
            <h5 style="color: gray; font-weight: 500">Black Widow (2021)</h5>
            <ul class="list-detail">
                <li>
                    <span>Trạng Thái</span>
                    :
                    <span class="quanlity">HD</span>
                    <span class="episode">Vietsub</span>
                </li>
                <li>
                    <span>Thời Lượng</span>
                    : {{ isset($detail_phim) ? $detail_phim->thoi_luong : '' }} Phút
                </li>
                <li>
                    <span>Thể Loại</span>:
                    <a href="" rel="category tag">{{ isset($detail_phim) ? $detail_phim->the_loai : '' }}</a>,
                </li>
                <li>
                    <span>Quốc Gia</span>:
                    <a href="">{{ isset($detail_phim) ? $detail_phim->quoc_gia : '' }}</a>
                </li>
                <li>
                    <span>Đạo Diễn</span>:
                    <a href="">{{ isset($detail_phim) ? $detail_phim->dao_dien : '' }}</a>
                </li>
                <li>
                    <span>Diễn Viên</span>:
                    <a href="" rel="nofollow" title="C.C. Smiff">{{ isset($detail_phim) ? $detail_phim->dien_vien : '' }}</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container__detail-content">
        <h2>Nội Dung Phim</h2>
        <div class="content__detail-mo-ta">
            <p>Phim {{ isset($detail_phim) ? $detail_phim->ten_phim : '' }} - 2021 - {{ isset($detail_phim) ? $detail_phim->quoc_gia : ''}}:</p>
            <p style="text-align: justify;">{{ isset($detail_phim) ? $detail_phim->mo_ta : '' }}</p>
        </div>
    </div>
</section>
<section class="container__movie">
    <div class="container__movie-item">
        <h2 class="container__movie-phim-noi-bat" style="font-weight: 600;">Có Thể Bạn Muốn Xem</h2>
        <div class="swiper mySlideMovie">
            <div class="swiper-wrapper">
                @foreach ($list_phim_2 as $key => $value)
                <div class="swiper-slide">
                    <a href="/chi-tiet-phim/{{$value->slug_ten_phim}}-{{$value->id}}" title="{{$value->slug_ten_phim}}">
                        <div class="scale">
                            <img src="{{$value->hinh_anh}}" alt="{{$value->slug_ten_phim}}"
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
