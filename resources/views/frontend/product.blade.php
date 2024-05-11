@extends('layouts.site')
@section('title','LIST')
@section('content')
<div class="container">
    <h1>Danh sách sản phẩm</h1>
    <div class="filter-sort">
        <div class="filter">
            <label for="price-filter" style="color: white;">Chọn giá:</label>
            <select id="price-filter">
                <option value="0">Tất cả giá</option>
                <option value="1">Dưới $50</option>
                <option value="2">$50 - $100</option>
                <option value="3">Trên $100</option>
            </select>
        
            <label for="type-filter" style="color: white;">Chọn loại:</label>
            <select id="type-filter">
                <option value="0">Tất cả loại</option>
                <option value="1">Laptop</option>
                <option value="2">Điện thoại</option>
                <option value="3">Máy ảnh</option>
                <option value="4">Thiết bị điện tử khác</option>
            </select>
        </div>
        
        <div class="product-list">
            <!-- Mỗi sản phẩm được bao bởi một thẻ div với class "product-card" -->
            <div class="product-card">
                <img src="{{ asset('img/OIP (4).jpg') }}" alt="">
                <h3>Tên sản phẩm 1</h3>
                <p>Giá: $99</p>
                <div class="button-group">
                     <a href="{{ route('chi-tiet-san-pham', ['slug' => 1]) }}" class="btn-view">Xem sản phẩm</a>
                    <button>Mua Ngay</button>
                </div>
            </div>
            <div class="product-card">
                <img src="{{ asset('img/OIP (3).jpg') }}" alt="">
                <h3>Tên sản phẩm 2</h3>
                <p>Giá: $79</p>
                <div class="button-group">
                     <a href="{{ route('chi-tiet-san-pham', ['slug' => 1]) }}" class="btn-view">Xem sản phẩm</a>
                    <button>Mua Ngay</button>
                </div>
            </div>
            <div class="product-card">
                <img src="{{ asset('img/R.jpg') }}" alt="">
                <h3>Tên sản phẩm 3</h3>
                <p>Giá: $99</p>
                <div class="button-group">
                     <a href="{{ route('chi-tiet-san-pham', ['slug' => 1]) }}" class="btn-view">Xem sản phẩm</a>
                    <button>Mua Ngay</button>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
