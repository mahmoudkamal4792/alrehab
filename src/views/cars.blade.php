@extends('layouts.master')
@section('PageTitle', 'السيارات')

@section('PageContent')
<div class="container">
    <h2 class="default-section-title">
        احجز سيارتك الأن
    </h2>
    <p class="default-section-desc">
        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق
    </p>
    <div class="cars-page-grid">
        <div class="filters">
            <div class="filter-block price-block">
                <span class="price-title">
                    السعر
                </span>

                <div class="range-slider-cont">
                    <input type="range" class="range-slider-input" min="0" max="100" step="10" value="0">
                    <span class="value-bg"></span>
                </div>

                <div class="values">
                    <span>
                        <strong>0</strong> ر.س
                    </span>
                    <span class="seperate">
                        -
                    </span>
                    <span>
                        <strong class="value">0</strong> ر.س
                    </span>
                </div>
            </div>
            @include('components.filters', ['count' => 5])
        </div>
        @include('components.cars_list', ['count' => 9])
    </div>
</div>
@endsection