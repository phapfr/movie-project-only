<header id="header">
    <a id="logo" href="/">Movie</a>
    <nav class="navbar">
        <ul class="navbar__menu">
            <li><a href="/"><i class="fa-solid fa-house"></i> trang chủ</a></li>
            <li><a href="/phim-moi">phim mới</a></li>
            <li>
                <a href="#theloai">thể loại <i class="fa-solid fa-chevron-down"></i></a>
                <ul class="menu__the-loai">
                    <li><a href="#">phim hành động</a></li>
                    <li><a href="#">phim tình cảm</a></li>
                    <li><a href="#">phim hài hước</a></li>
                    <li><a href="#">phim hoạt hình</a></li>
                    <li><a href="#">phim sắp chiếu</a></li>
                </ul>
            </li>
            <li>
                <a href="#quocgia">quốc gia <i class="fa-solid fa-chevron-down"></i></a>
                <ul class="menu__quoc-gia">
                    <li><a href="#phimhanquoc">phim hàn quốc</a></li>
                    <li><a href="#phimaumy">phim âu mỹ</a></li>
                    <li><a href="#phimtrungquoc">phim trung quốc</a></li>
                    <li><a href="#phimnhatban">phim nhật bản</a></li>
                </ul>
            </li>
            <li><a href="/tin-tuc">bài viết</a></li>
        </ul>
    </nav>
    <div class="form form-control">
        <form class="form__search" action="/tim-kiem" method="post">
            @csrf
            <div class="form__search-block">
                <input class="form__search-input" name="search" type="text" placeholder="Tìm kiếm phim">
                <i type="submit" class="fa-solid fa-magnifying-glass"></i>
            </div>
        </form>
        <span id="bar"><i class="fa-solid fa-bars" style="color: #ffffff;"></i></span>
    </div>
</header>
