<div class="cars-list">
    @for ($i = 0; $i < $count; $i++)    
        @php
            $car_img = "images/products/" . (($i % 4) + 1) . ".png";
        @endphp
        <a class="car-item" href="#">
            <div class="car-item-head">
                <h4 class="car-name">بورش ناميرا</h4>
                <span class="car-model">2002</span>
            </div>
            <span class="car-price">1400 ر.س <span>/ يوم</span></span>
            <div class="car-img">
                <img src="{{ $car_img }}" alt="">
                <span class="car-cta">احجز الآن</span>
            </div>
        </a>
    @endfor
</div>