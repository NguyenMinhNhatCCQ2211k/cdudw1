@extends('layouts.site')
@section('title','LIST')
@section('content')
<section class="product-new">
    <h2>Sản phẩm mới</h2>
    <div class="product">
        <div class="thumbnail">
            <!-- Chèn ảnh sản phẩm mới -->
            <h3>Tên sản phẩm</h3>
            <img src="{{ asset('img/tai-nghe-bluetooth-blue-1.jpg') }}" alt="">
            
            <p>Giá: $99</p>
           
            <a href="{{ route('chi-tiet-san-pham', ['slug' => 1]) }}" class="btn-view">Xem sản phẩm</a>
        </div>
        <div class="thumbnail">
            <!-- Chèn ảnh sản phẩm mới -->
            <h3>Tên sản phẩm</h3>
            <img src="{{ asset('img/OIP (7).jpg') }}" alt="">
            <p>Giá: $99</p>
            <a href="{{ route('chi-tiet-san-pham', ['slug' => 1]) }}" class="btn-view">Xem sản phẩm</a>
        </div>
        <div class="thumbnail">
            <!-- Chèn ảnh sản phẩm mới -->
            <h3>Tên sản phẩm</h3>
            <img src="{{ asset('img/R (4).jpg') }}" alt="">
            <p>Giá: $99</p>
             <a href="{{ route('chi-tiet-san-pham', ['slug' => 1]) }}" class="btn-view">Xem sản phẩm</a>
        </div>
    </div>
</section>


<section class="product-sale">
    <h2>Sản phẩm giảm giá</h2>
    <div class="product">
        <div class="thumbnail">
            <!-- Chèn ảnh sản phẩm giảm giá -->
            <h3>Tên sản phẩm</h3>
            <img src="{{ asset('img/R (3).jpg') }}" alt="">
            <p>Giá: $50 <span class="discount">Giảm giá 30%</span></p>
             <a href="{{ route('chi-tiet-san-pham', ['slug' => 1]) }}" class="btn-view">Xem sản phẩm</a>
        </div>
        <div class="thumbnail">
            <!-- Chèn ảnh sản phẩm giảm giá -->
            <h3>Tên sản phẩm</h3>
            <img src="{{ asset('img/R (2).jpg') }}" alt="">
            <p>Giá: $50 <span class="discount">Giảm giá 30%</span></p>
             <a href="{{ route('chi-tiet-san-pham', ['slug' => 1]) }}" class="btn-view">Xem sản phẩm</a>
        </div>
        <div class="thumbnail">
            <!-- Chèn ảnh sản phẩm giảm giá -->
            <h3>Tên sản phẩm</h3>
            <img src="{{ asset('img/513j1zPGyYL._SY400_.jpg') }}" alt="">
            <p>Giá: $50 <span class="discount">Giảm giá 30%</span></p>
            <a href="#" class="btn-view">Xem sản phẩm</a>
        </div>
    </div>
</section>

<section class="post-new">
    <h2>Bài viết mới</h2>
    <div class="post">
        <h3>Tiêu đề </h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum..</p>
    </div>
    <div class="post">
        <h3>Tiêu đề </h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis eleifend quam adipiscing vitae proin sagittis nisl rhoncus mattis. Est ultricies integer quis auctor elit sed vulputate mi sit. Pellentesque adipiscing commodo elit at imperdiet. Nulla pharetra diam sit amet. Enim tortor at auctor urna nunc id. Fringilla phasellus faucibus scelerisque eleifend donec. Tortor aliquam nulla facilisi cras fermentum odio eu feugiat. Metus dictum at tempor commodo ullamcorper a lacus vestibulum. Donec pretium vulputate sapien nec. Commodo nulla facilisi nullam vehicula ipsum a. Amet luctus venenatis lectus magna fringilla urna porttitor. Nisl vel pretium lectus quam id leo.</p>
    </div>
    <div class="post">
        <h3>Tiêu đề </h3>
        <p>Cras ornare arcu dui vivamus arcu felis bibendum ut. Ut diam quam nulla porttitor massa id. Duis ultricies lacus sed turpis tincidunt id aliquet. Habitant morbi tristique senectus et netus. Lacus vel facilisis volutpat est velit egestas dui id. Morbi tristique senectus et netus et. Nulla facilisi nullam vehicula ipsum. Aliquam id diam maecenas ultricies mi. Ipsum suspendisse ultrices gravida dictum fusce ut placerat. Sed vulputate odio ut enim blandit volutpat.</p>
    </div>
</section>

@endsection
