@extends('layouts.auth')
@section('PageTitle', 'تسجيل دخول')
@section('PageSubtitle', 'من فضلك ادخل البيانات التالية')

@section('PageContent')
<form class="log-form sign-form" action="/account">
    <div class="sign-group">
        <div class="tel-cont">
            <span class="country">
                966+
                <img src="images/ar.png" alt="SAR">
            </span>
            <input type="tel" class="sign-input" placeholder="رقم الجوال">
        </div>
    </div>
    <div class="sign-group">
        <input type="password" class="sign-input" placeholder="كلمة المرور">
    </div>
    <p class="forget-pass">
        <a href="/forget">نسيت كلمة المرور</a>
    </p>
    <button class="btn btn-primary sign-btn">تسجيل دخول</button>
    <p class="form-hint">
        لديك لديك حساب ؟ <a href="/register">سجل الأن</a>
    </p>
</form>
@endsection