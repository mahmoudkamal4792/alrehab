@for ($i = 0; $i < $count; $i++)    
    @php
        $filtername = "images/filters/0". (($i % 5) + 1) . ".png";
    @endphp
    <a class="filter-block filter-item" href="#">
        <h5 class="filter-name">
            سيارة فاخرة
        </h5>
        <div class="filter-img">
            <img src="{{ $filtername }}" alt="">
        </div>
    </a>
@endfor