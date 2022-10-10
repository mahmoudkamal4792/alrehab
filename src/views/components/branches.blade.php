@php
    $map_api_key = '';
    $branches = [
        [
            'id' => 1,
            'name' => 'شارع الزهور - جدة - المملكة العربية السعودية',
            'lat' => 24.7041827,
            'lng' => 45.7398969
        ],
        [
            'id' => 2,
            'name' => 'شارع الزهور - مكة - المملكة العربية السعودية',
            'lat' => 24.7041827,
            'lng' => 46.7338969
        ],
        [
            'id' => 3,
            'name' => 'شارع الزهور - الرياض - المملكة العربية السعودية',
            'lat' => 24.7061827,
            'lng' => 43.7368969
        ],
        [
            'id' => 4,
            'name' => 'شارع الزهور - جدة2 - المملكة العربية السعودية',
            'lat' => 25.7041827,
            'lng' => 42.7398969
        ],
        [
            'id' => 5,
            'name' => 'شارع الزهور - مكة2 - المملكة العربية السعودية',
            'lat' => 24.2041827,
            'lng' => 46.7338969
        ],
        [
            'id' => 6,
            'name' => 'شارع الزهور - الرياض2 - المملكة العربية السعودية',
            'lat' => 24.7061827,
            'lng' => 46.9368969
        ],
    ]
@endphp

<p class="default-section-desc">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق</p>
<div id="branches-map" style="height: 450px"></div>
<div class="branches-list">
    <div class="swiper branches-swiper">
        <div class="swiper-wrapper">
            @foreach ($branches as $branch)
                <div class="swiper-slide">
                    <a class="branch-item" role="button" data-id="location_{{ $branch['id'] }}">
                        <i data-feather="map-pin"></i>
                        <span>{{ $branch['name'] }}</span>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>



@push('footer')

{{-- Map script --}}
<script>
    let map;
    function initMap() {
        map = new google.maps.Map(document.getElementById('branches-map'), {
            zoom: 13,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            zoomControl: false,
            fullscreenControl: false,
            center: new google.maps.LatLng("24.7041827", "45.7398969"),
            styles: [{
                stylers: [{
                    saturation: -100
                }]
            }]
        });

        // Markers
        let marker;

        @foreach ($branches as $branch)
            marker = new google.maps.Marker({
                position: new google.maps.LatLng("{{ $branch['lat'] }}", "{{ $branch['lng'] }}"),
                icon: 'images/map-pin.png',
                title: "{{ $branch['name'] }}",
                map: map,
            });

            marker.addListener('click', function(e) {
                console.log(e);
            });

            $('.branch-item[data-id="location_{{ $branch['id'] }}"]').on('click', function() {
                map.panTo(new google.maps.LatLng("{{ $branch['lat'] }}", "{{ $branch['lng'] }}"));
            });
        @endforeach

    }
</script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key={{ $map_api_key }}&callback=initMap"></script>

@endpush