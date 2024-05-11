@extends('layouts.site')
@section('title','LIST')
@section('content')
<div class="product-detail">
    <!-- Thông tin sản phẩm -->
    <div class="product-info">
        
        <h2>Tên sản phẩm</h2>
        <img src="{{ asset('img/OIP (3).jpg') }}" alt="">
        <p>Giá: $99</p>
        <p>Mô tả: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>

    <!-- Chi tiết sản phẩm -->
    <div class="product-details">
        
        <h3>Chi tiết sản phẩm</h3>
        <ul>
            <li>Danh mục sản phẩm</li>
            <li>Xuất xứ</li>
            <li>Đánh giá</li>
            <!-- Thêm các thông tin chi tiết khác nếu cần -->
        </ul>
    </div>

    <!-- Sản phẩm cùng loại -->
   
</div>
<div class="same-category-products">
    <h3>Sản phẩm cùng loại</h3>
    <div class="product-card">
        <img src="{{ asset('img/OIP (5).jpg') }}" alt="">
        <h4>CAMERA 1</h4>
        <p>Giá: $79</p>
    </div>
    <div class="product-card">
        <img src="{{ asset('img/OIP (6).jpg') }}" alt="">
        <h4>CAMERA 2</h4>
        <p>Giá: $89</p>
    </div>
    <!-- Thêm sản phẩm cùng loại khác nếu cần -->
</div>
@endsection
