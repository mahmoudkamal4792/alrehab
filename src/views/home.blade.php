@extends('layouts.master', [
    'is_home' => true,
])
@section('PageTitle', 'الرئيسية')

@section('PageContent')
    <section class="default-section categories-section">
        <div class="container">
            <h2 class="default-section-title">إختر الفئة</h2>
            <p class="default-section-desc">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق</p>

            <div class="categories-list">
                <a class="category-item" href="#">
                    <img src="images/categories/01.png" alt="">
                    <span>سيارة صغيرة</span>
                </a>
                <a class="category-item" href="#">
                    <img src="images/categories/02.png" alt="">
                    <span>سيارة وسط</span>
                </a>
                <a class="category-item" href="#">
                    <img src="images/categories/03.png" alt="">
                    <span>سيارة كبيرة</span>
                </a>
                <a class="category-item" href="#">
                    <img src="images/categories/04.png" alt="">
                    <span>سيارة كروس أوفر</span>
                </a>
                <a class="category-item" href="#">
                    <img src="images/categories/05.png" alt="">
                    <span>سيارة فاخرة</span>
                </a>
            </div>
        </div>

    </section>

    <section class="default-section gray-bg">
        <div class="container">
            <h3 class="default-section-title">احجز سيارتك الآن</h3>
            <p class="default-section-desc">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق</p>

            @include('components.cars_list', ['count' => 12])
        </div>
    </section>

    <section class="default-section white-bg">
        <div class="container">
            <div class="branches-container" style="background-image: url('images/branches-bg.png')">
                <h3 class="default-section-title">فروعنا</h3>
                @include('components.branches')
            </div>
        </div>
    </section>

    <section class="default-section gray-bg apps-section" style="background-image: url('images/apps-bg.png')">
        <div class="container">
            <div class="apps-section-container">
                <div class="apps-section-content">
                    <img class="apps-section-icon" src="images/apps_icon.png" alt="">
                    <h3 class="apps-section-title">حمل تطبيق الرحاب واستمتع بالعروض</h3>
                    <p class="apps-section-desc">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق</p>

                    <div class="apps-links">
                        <a href="#"><img src="images/app-store.png" class="img-fluid" alt=""></a>
                        <a href="#"><img src="images/play-store.png" class="img-fluid" alt=""></a>
                    </div>
                </div>
                <div class="apps-section-img">
                    <img src="images/app.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection