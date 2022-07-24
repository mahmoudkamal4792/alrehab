@extends('layouts.master')
@section('PageTitle', 'اتصل بنا')

@section('PageContent')
    <div class="container">
        <div class="contact-container">
            <div class="contact-form">
                <form action="" class="v-form">
                    <div class="form-group">
                        <input type="text" name="name" placeholder="الاسم" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone" placeholder="رقم الجوال" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="البريد الالكتروني" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="subject" placeholder="الموضوع" class="form-control">
                    </div>
                    <div class="form-group">
                        <textarea name="message" placeholder="الرسالة" class="form-control"></textarea>
                    </div>

                    <button class="btn btn-primary contact-btn">إرسال</button>
                </form>
            </div>
            <div class="contact-details">
                <h3 class="contact-title">يمكنك الإتصال بنا عبر الوسائل التالية أو ملئ النموذج</h3>
                <div class="addresses-list">
                    <div class="address-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>شارع الزهور - جدة - المملكة العربية السعودية</span>
                    </div>
                    <div class="address-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>شارع الزهور - جدة - المملكة العربية السعودية</span>
                    </div>
                    <div class="address-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>شارع الزهور - جدة - المملكة العربية السعودية</span>
                    </div>
                    <div class="address-item">
                        <i class="fas fa-phone fa-rotate-90"></i>
                        <span dir="ltr"><a href="tel:+18004563796">+1 (800) 456 37 96</a> - <a href="tel:+18004563796">+1 (800) 456 37 96</a></span>
                    </div>
                    <div class="address-item">
                        <i class="fas fa-envelope"></i>
                        <span><a href="email:example@example.com">example@example.com</a></span>
                    </div>
                </div>

                <h3 class="contact-title">تابعونا على</h3>
                <div class="social-list">
                    <a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </div>
@endsection