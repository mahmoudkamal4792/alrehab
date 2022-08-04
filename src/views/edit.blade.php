@extends('layouts.master')
@section('PageTitle', 'تعديل بياناتي')

@section('PageContent')
<form class="edit-form">
    <div class="personal-img">
        <label class="img-cont">
            <input type="file">
            <span class="user-icon">
                @svg('user')
            </span>
            الصورة الشخصية
        </label>
    </div>

    <div class="form-grid">
        <div class="edit-group">
            <input type="text" class="edit-input" placeholder="الاسم الأول">
        </div>
        <div class="edit-group">
            <input type="text" class="edit-input" placeholder="الإسم الاخير">
        </div>
        <div class="edit-group">
            <input type="text" class="edit-input" placeholder="الجنسية">
        </div>
        <div class="edit-group">
            <input type="text" class="edit-input" placeholder="العنوان الوطني">
        </div>
        <div class="edit-group">
            <div class="tel-cont">
                <span class="country">
                    966+
                    <img src="images/ar.png" alt="SAR">
                </span>
                <input type="tel" class="edit-input" placeholder="رقم الجوال">
            </div>
        </div>
        <div class="edit-group">
            <div class="date-cont">
                <input type="text" class="edit-input" placeholder="تاريخ الميلاد">
                <span class="icon">
                    @svg('Calendar')
                </span>
            </div>
        </div>
        <div class="edit-group">
            <input type="text" class="edit-input" placeholder="رخصة القيادة">
        </div>
        <div class="edit-group">
            <div class="date-cont">
                <input type="text" class="edit-input" placeholder="تاريخ الإنتهاء">
                <span class="icon">
                    @svg('Calendar')
                </span>
            </div>
        </div>
        <div class="edit-group">
            <input type="text" class="edit-input" placeholder="رقم الهوية">
        </div>
        <div class="edit-group">
            <div class="form-grid">
                <div class="edit-group">
                    <label class="file-cont">
                        <input type="file" class="edit-input">
                        صورة الهوية
                        <span class="icon">
                            @svg('image')
                        </span>
                    </label>
                </div>
                <div class="edit-group">
                    <div class="date-cont">
                        <input type="text" class="edit-input" placeholder="تاريخ الإنتهاء">
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19">
                                <g id="Calendar" transform="translate(0.035 0.5)">
                                    <path id="Calendar-2" data-name="Calendar" d="M5.438,18H5.427A6,6,0,0,1,1.48,16.757,4.267,4.267,0,0,1,.011,13.392L0,5.9A4.19,4.19,0,0,1,1.286,2.745a5.629,5.629,0,0,1,3.47-1.368V.7A.645.645,0,0,1,4.988.2a.872.872,0,0,1,.569-.2A.738.738,0,0,1,6.36.7v.63l6.191-.007V.693a.642.642,0,0,1,.23-.5.875.875,0,0,1,.571-.2.738.738,0,0,1,.8.692v.675A5.681,5.681,0,0,1,17.662,2.7a4.127,4.127,0,0,1,1.326,3.136L19,13.424c0,2.813-2.07,4.563-5.413,4.567Zm8.33-5.227a.814.814,0,0,0-.854.766.883.883,0,1,0,.865-.766Zm-8.578,0h0a.83.83,0,0,0-.853.774.815.815,0,0,0,.856.719h.041a.921.921,0,0,0,.6-.239.678.678,0,0,0,.227-.536.806.806,0,0,0-.865-.718Zm4.294,0h0a.834.834,0,0,0-.853.775.817.817,0,0,0,.859.719h.038a.8.8,0,0,0,.823-.775.806.806,0,0,0-.865-.718Zm-4.3-3.234h0a.83.83,0,0,0-.853.774.814.814,0,0,0,.857.719H5.23a.918.918,0,0,0,.595-.239.679.679,0,0,0,.226-.536.806.806,0,0,0-.864-.718ZM9.48,9.5h0a.831.831,0,0,0-.854.774.816.816,0,0,0,.86.72h.038a.8.8,0,0,0,.822-.775A.807.807,0,0,0,9.482,9.5Zm4.3.006h0a.81.81,0,0,0-.853.755v.011a.807.807,0,0,0,.866.718h.02a.8.8,0,0,0,.833-.766A.82.82,0,0,0,13.777,9.509ZM4.759,2.752C2.663,2.932,1.6,3.99,1.6,5.9l0,.279,15.779-.018V5.843c-.045-1.9-1.13-2.944-3.226-3.1v.693a.745.745,0,0,1-.8.693.87.87,0,0,1-.575-.2.646.646,0,0,1-.229-.491V2.709l-6.191.007,0,.727a.737.737,0,0,1-.8.693.87.87,0,0,1-.575-.2.645.645,0,0,1-.229-.491V2.752Z" transform="translate(0.465 0)" fill="#5d5b5d" stroke="rgba(0,0,0,0)" stroke-width="1" />
                                </g>
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="edit-group">
            <input type="password" class="edit-input" placeholder="كلمة المرور">
        </div>
        <div class="edit-group">
            <input type="password" class="edit-input" placeholder="تأكيد كلمة المرور">
        </div>
    </div>

    <button class="btn btn-primary sign-btn">حفظ</button>
</form>
@endsection