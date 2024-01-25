<div>

    <style>
        #map {
            height: 1000px;

        }
    </style>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
          integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>

    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
            integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <div id="map"></div>

    <script>
        var map = L.map('map').setView([31.867588336515183, 54.37847691719813], 12);

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // L.marker([51.5, -0.09]).addTo(map)
        //     .bindPopup('A pretty CSS popup.<br> Easily customizable.')
        //     .openPopup();

        @foreach($cafes as $cafe)

        L.marker([{{$cafe->location_lat}}, {{$cafe->location_long}}]).addTo(map)
            .bindPopup(`
                <a href='http://menuma.online/{{$cafe->slug}}' target="_blank" >
                {{$cafe->name}}
            </a>
        `);

        @if(request()->aria=='1')

        var circle = L.circle([{{$cafe->location_lat}}, {{$cafe->location_long}}], {
            color: '#0015ff05',
            fillColor: 'blue',
            fillOpacity: 0.02,
            radius: 250
        }).addTo(map);
        var circle = L.circle([{{$cafe->location_lat}}, {{$cafe->location_long}}], {
            color: '#0015ff05',
            fillColor: 'blue',
            fillOpacity: 0.1,
            radius: 500
        }).addTo(map);
        var circle = L.circle([{{$cafe->location_lat}}, {{$cafe->location_long}}], {
            color: '#ff000005',
            fillColor: '#ff0000',
            fillOpacity: 0.03,
            radius: 1000
        }).addTo(map);

        @endif
        @endforeach


    </script>
</div>
