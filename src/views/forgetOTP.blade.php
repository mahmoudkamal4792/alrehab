@extends('layouts.auth')
@section('PageTitle', 'التحقق من الحساب')

@section('PageContent')
<form class="otp-form sign-form" action="/reset">
    <div class="otp-head">
        <h6 class="sign-subtitle">تم إرسال كود التفعيل على رقم جوالك التالي</h6>
        <strong>545657892</strong>
        <a href="/register">ليس رقم جوالي</a>
    </div>
    <div class="inputs-numbers">
        <input type="number" placeholder="-" class="form-control code-input sign-input" />
        <input type="number" placeholder="-" class="form-control code-input sign-input" disabled />
        <input type="number" placeholder="-" class="form-control code-input sign-input" disabled />
        <input type="number" placeholder="-" class="form-control code-input sign-input" disabled />
        <input type="number" placeholder="-" class="form-control code-input sign-input" disabled />
    </div>
    <button class="btn btn-primary sign-btn disabled" id="code-submit-btn">تفعيل</button>
</form>

@endsection