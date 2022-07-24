@extends('layouts.auth')
@section('PageTitle', 'تسجيل حساب جديد')
@section('PageSubtitle', 'من فضلك ادخل البيانات التالية')

@section('PageContent')
<form class="register-form sign-form">
    <div class="form-grid">
        <div class="sign-group">
            <input type="text" class="sign-input" placeholder="الاسم الأول">
        </div>
        <div class="sign-group">
            <input type="text" class="sign-input" placeholder="الإسم الاخير">
        </div>
        <div class="sign-group">
            <input type="text" class="sign-input" placeholder="الجنسية">
        </div>
        <div class="sign-group">
            <input type="text" class="sign-input" placeholder="العنوان الوطني">
        </div>
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
            <div class="date-cont">
                <input type="text" class="sign-input flatPickr" placeholder="تاريخ الميلاد">
                <span class="icon">
                    @svg('Calendar')
                </span>
            </div>
        </div>
        <div class="sign-group">
            <input type="text" class="sign-input" placeholder="رخصة القيادة">
        </div>
        <div class="sign-group">
            <div class="date-cont">
                <input type="text" class="sign-input flatPickr" placeholder="تاريخ الإنتهاء">
                <span class="icon">
                    @svg('Calendar')
                </span>
            </div>
        </div>
        <div class="sign-group">
            <input type="text" class="sign-input" placeholder="رقم الهوية">
        </div>
        <div class="sign-group">
            <div class="form-grid">
                <div class="sign-group">
                    <label class="file-cont">
                        <input type="file" class="sign-input">
                        صورة الهوية
                        <span class="icon">
                            @svg('image')
                        </span>
                    </label>
                </div>
                <div class="sign-group">
                    <div class="date-cont">
                        <input type="text" class="sign-input flatPickr" placeholder="تاريخ الإنتهاء">
                        <span class="icon">
                            @svg('Calendar')
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="sign-group">
            <input type="password" class="sign-input" placeholder="كلمة المرور">
        </div>
        <div class="sign-group">
            <input type="password" class="sign-input" placeholder="تأكيد كلمة المرور">
        </div>
    </div>

    <a href="/registerOTP" class="btn btn-primary sign-btn">التالي</a>
    <p class="form-hint">
        لديك عضوية بالفعل ؟ <a href="/login">تسجيل الدخول</a>
    </p>
</form>
@endsection