@extends('layouts.master')
@section('PageTitle', 'تفاصيل السيارة')

@section('PageContent')
    <div class="container">
        <div class="single-grid">

            {{-- Thumbs --}}
            <div class="single-imgs">
                <div class="swiper single-swiper" dir="rtl">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="images/products/single.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="images/products/single2.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="images/products/single.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="images/products/single2.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="images/products/single.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="images/products/single2.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="images/products/single.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="images/products/single2.jpg" />
                        </div>
                    </div>
                </div>
                <div class="swiper thumbs-swiper" dir="rtl">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="images/products/thumb.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="images/products/thumb2.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="images/products/thumb.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="images/products/thumb2.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="images/products/thumb.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="images/products/thumb2.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="images/products/thumb.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="images/products/thumb2.jpg" />
                        </div>
                    </div>
                </div>
            </div>

            {{-- Info --}}
            <div class="single-infos">
                <div class="single-head">
                    <h1 class="single-title">
                        مازدا
                    </h1>
                    <div class="single-price">
                        1400 ر.س <span>/يوم</span>
                    </div>
                </div>
                <div class="year">2022</div>
                <p class="car-desc">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                    العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها
                    التطبيق</p>
                <div class="book-form">
                    <div class="book-group">
                        <select class="book-input">
                            <option>فرع التسليم</option>
                            <option>فرع 1</option>
                            <option>فرع 2</option>
                            <option>فرع 3</option>
                            <option>فرع 4</option>
                        </select>
                        <span class="icon"><i data-feather="chevron-down"></i></span>
                    </div>
                    <div class="book-line">
                        <div class="book-group">
                            <div class="date-cont">
                                <input type="text" class="book-input flatPickr" placeholder="تاريخ الإستلام">
                                <span class="icon">
                                    @svg('Calendar')
                                </span>
                            </div>
                        </div>
                        <div class="book-group">
                            <div class="date-cont">
                                <input type="text" class="book-input flatPickr" placeholder="تاريخ التسليم">
                                <span class="icon">
                                    @svg('Calendar')
                                </span>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary book-btn">حجز</button>
                </div>
            </div>
        </div>
    </div>

    @include('components.reserve')
@endsection
