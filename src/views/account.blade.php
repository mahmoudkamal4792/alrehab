@extends('layouts.master')
@section('PageTitle', 'العضوية')

@section('PageContent')
    <div class="container">
        <p class="default-section-desc">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق</p>

        <div class="accounts-list">
            <label class="account-option gold">
                <input type="radio" name="account">
                <span class="option-label"><span></span></span>
                <div class="account-option-container">
                    <div class="account-option-name">
                        @svg('crown-gold')
                        <span>العضوية الذهبية</span>
                    </div>
                    <div class="account-option-price">
                        <p class="price-label">150 <span>ر.س</span></p>
                        <p class="discount-label">خصم <span>60%</span></p>
                    </div>
                </div>
            </label>
            <label class="account-option silver">
                <input type="radio" name="account">
                <span class="option-label"><span></span></span>
                <div class="account-option-container">
                    <div class="account-option-name">
                        @svg('crown-silver')
                        <span>العضوية الفضية</span>
                    </div>
                    <div class="account-option-price">
                        <p>100 <span>ر.س</span></p>
                        <p class="discount-label">خصم <span>60%</span></p>
                    </div>
                </div>
            </label>
            <label class="account-option bronze">
                <input type="radio" name="account">
                <span class="option-label"><span></span></span>
                <div class="account-option-container">
                    <div class="account-option-name">
                        @svg('crown-bronze')
                        <span>العضوية البرونزية</span>
                    </div>
                    <div class="account-option-price">
                        <p>50 <span>ر.س</span></p>
                        <p class="discount-label">خصم <span>60%</span></p>
                    </div>
                </div>
            </label>
        </div>

        <a href="/pay" class="btn btn-primary account-pay-btn">دفع</a>
    </div>
@endsection