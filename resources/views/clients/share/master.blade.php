<!DOCTYPE html>
<html lang="vi">
<head>
    @include('clients.share.css')
</head>
<body>
    @include('clients.share.header')

    <main>
        @yield('content')

        
    </main>

    <div title="Về đầu trang" id="top-up">
        <i class="fas fa-arrow-circle-up"></i>
    </div>
    @include('clients.share.js')
    @yield('js')
</body>
</html>
