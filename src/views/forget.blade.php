@extends('layouts.auth')
@section('PageTitle', 'نسيت كلمة المرور')
@section('PageSubtitle', 'من فضلك ادخل البيانات التالية')

@section('PageContent')
<form class="log-form sign-form" action="/forgetOTP">
    <div class="sign-group">
        <div class="tel-cont">
            <span class="country">
                966+
                <img src="images/ar.png" alt="SAR">
            </span>
            <input type="tel" class="sign-input" placeholder="رقم الجوال">
        </div>
    </div>
    <button class="btn btn-primary sign-btn">التالي</button>
    <p class="form-hint">
        لديك لديك حساب ؟ <a href="/register">سجل الأن</a>
    </p>
</form>
@endsection