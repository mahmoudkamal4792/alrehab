@extends('layouts.master')
@section('PageTitle', 'الدفع')

@section('PageContent')
<div class="container">
    <div class="pay-grid">
        <form class="pay-form">
            <div class="form-group">
                <input type="text" name="name" placeholder="الإسم على الكارت" class="form-control">
            </div>
            <div class="form-group">
                <input type="number" name="number" placeholder="الرقم على الكارت" class="form-control">
            </div>
            <div class="form-line">
                <div class="form-group">
                    <input type="text" name="date" placeholder="تاريخ الإنتهاء" class="form-control">
                </div>
                <div class="form-group">
                    <input type="number" name="cvv" placeholder="Cvv" class="form-control">
                </div>
            </div>
            <button class="btn btn-primary account-pay-btn">دفع</button>
        </form>
        <div class="pay-account">
            <div class="account-option selected-account gold">
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
            </div>
            <p class="selectd-account-text">
                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق
            </p>
        </div>
    </div>
</div>
@endsection