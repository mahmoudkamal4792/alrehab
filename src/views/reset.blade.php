@extends('layouts.auth')
@section('PageTitle', 'تعين كلمة مرور جديدة')
@section('PageSubtitle', 'من فضلك ادخل البيانات التالية')

@section('PageContent')
<form class="log-form sign-form">
    <div class="sign-group">
        <input type="password" class="sign-input" placeholder="كلمة المرور الجديدة">
    </div>
    <div class="sign-group">
        <input type="password" class="sign-input" placeholder="تأكيد كلمة المرور الجديدة">
    </div>

    <button class="btn btn-primary sign-btn">تعين</button>
</form>
@endsection