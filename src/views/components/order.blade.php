@for ($i = 0; $i < $count; $i++) 
    @php 
        $car_img="images/products/" . (($i % 4) + 1) . ".png" ;
    @endphp 
    <div class="order-item">
        <div class="car-info">
            <div class="car-img">
                <img src="{{ $car_img }}" alt="">
            </div>
            <div class="info-text">
                <div class="order-num">
                    طلب رقم 20#
                </div>
                <div class="car-name">
                    مازدا X3
                </div>
                <div class="year">2022</div>
            </div>
        </div>
        <div class="order-info">
            <div class="item">
                من
                <strong>17/9/2020</strong>
            </div>
            <div class="item">
                إلى
                <strong>17/9/2020</strong>
            </div>
            <div class="item">
                فرع الإستلام
                <strong>جدة</strong>
            </div>
        </div>
        <div class="price-cont">
            <div class="order-price">
                إجمالي السعر 
                <strong>1400 ر.س</strong>   
            </div>
            @if ($i / 3 == 1)
                <a href="#!" class="cancel-order">إلغاء الحجز</a>
                <span class="order-label">بإنتظار التأكيد</span>
            @else
                <span class="order-label over">منتهي</span>
            @endif
        </div>
    </div>
@endfor