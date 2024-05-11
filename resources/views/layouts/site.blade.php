<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UACompatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    @yield('header')
</head>
<body>

<header>
    <div class="logo">
        <img src="{{ asset('img/blue-logo-vector-4.png') }}" alt="logo">
        <h2>Shop online</h2>
    </div>
    <div class="search-wrapper">
        <input type="text" placeholder="Tìm kiếm...">
        <button type="submit"><img src="{{ asset('img/OIP.jpg') }}" alt="Search"></button>
    </div>
    
    
 
    <nav class="menu">
        <a href="{{ route('home') }}">Trang chủ</a>
        <a href="{{ route('san-pham') }}">Sản phẩm</a>
        <a href="#">Dịch vụ</a>
        <a href="{{ route('lien-he') }}">Liên hệ</a>
        <div class="login">
            <a href="#">Đăng nhập</a>
        </div>
    </nav>
    
    
    <div class="cart">
        <a href="#">
            <img src="{{ asset('img/cart-png-clipart-icon-gio-hang-115630026513wwdve21pi.png') }}" alt="">
        </a>
    </div>
</header>

<main>
   @yield('content')
</main>

<footer>
    <div class="footer">
        <p>Thông tin liên hệ: Địa chỉ, Số điện thoại, Email</p>
    </div>
    <div class="copyright">
        <p>&copy; Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>
    </div>
</footer>

</body>
</html>
