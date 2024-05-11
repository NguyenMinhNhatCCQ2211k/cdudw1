@extends('layouts.site')
@section('title','LIST')
@section('content')
<div class="container">
    <h2>Google Map</h2>
    <div id="google-map">
        <img src="{{ asset('img/Screenshot 2024-05-10 165311.png') }}" alt="">
    </div>

    <!-- Thông tin liên hệ -->
    <div class="contact-info">
        <h2>Thông tin liên hệ</h2>
        <p>246 Đỗ Xuân Hợp, P, Quận 9, Thành phố Hồ Chí Minh, Vietnam</p>
        <p>Điện thoại: 0823456789</p>
        <p>Email: acd@gmail.com</p>
    </div>

    <!-- Biểu mẫu liên hệ -->
    <div class="contact-form">
        <h2>Gửi tin nhắn cho chúng tôi</h2>
        <form action="/submit_contact_form" method="POST">
            <input type="text" name="name" placeholder="Họ và tên" required>
            <input type="email" name="email" placeholder="Email" required>
            <textarea name="message" placeholder="Nội dung tin nhắn" rows="5" required></textarea>
            <button type="submit">Gửi</button>
        </form>
    </div>
</div>

@endsection
