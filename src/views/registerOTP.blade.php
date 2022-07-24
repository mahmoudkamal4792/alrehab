@extends('layouts.auth')
@section('PageTitle', 'تفعيل الحساب')

@section('PageContent')
<form class="otp-form sign-form">
    @include('components.otp_form')
    <p class="form-hint">
        لديك عضوية بالفعل ؟ <a href="/login">تسجيل الدخول</a>
    </p>
</form>
@endsection