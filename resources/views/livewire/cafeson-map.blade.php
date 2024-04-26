<div>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

    <style>

        body {
            padding: 0;
            margin: 0;
        }

        html, body {
            height: 100%;
            width: 100vw;
        }

        #map {
            height: 100vh;
            width: 100vw;
        }

    </style>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
          integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>

    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
            integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <div id="map"></div>
    @php
        $mainDomain = config('app.domains.main');
        $panelDomain = config('app.domains.panel');
    @endphp
    <script>
        var map = L.map('map').setView([31.867588336515183, 54.37847691719813], 12);

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // L.marker([51.5, -0.09]).addTo(map)
        //     .bindPopup('A pretty CSS popup.<br> Easily customizable.')
        //     .openPopup();


        var me = null;
        var myArea = null;

        function onLocationFound(e) {
            var radius = e.accuracy;
            if (me == null) {
                me = L.marker(e.latlng).addTo(map)
                    .bindPopup("You are within " + radius + " meters from this point").openPopup();

                myArea = L.circle(e.latlng, radius).addTo(map);
                myArea.setStyle({color: 'green'})

            } else {
                me.setLatLng(e.latlng)
                myArea.setLang(e.latlng)
                myArea.setRadius(radius)

            }

        }

        map.on('locationfound', onLocationFound);


        function onLocationError(e) {
            alert(e.message);
        }

        map.on('locationerror', onLocationError);

        function cb(id) {
            // console.log(id)
            // console.log(this)
            let status = event.target.checked ? 1 : 0

            console.log(id)
            fetch('https://{{$panelDomain}}/api/' + id + '/' + status)
            // fetch('http://127.0.0.1:8000/api/' + id + '/' + status)
                .then(response => response)
                .then(data => console.log(data))
                .catch(error => alert(error.text()));

        }

        @foreach($cafes as $cafe)

        L.marker([{{$cafe->location_lat}}, {{$cafe->location_long}}]).addTo(map)
            // todo test
            .bindPopup(`
                <a href='http://{{$mainDomain}}/{{$cafe->slug}}' target="_blank" >
                {{$cafe->name}}
            </a>
            <br>
            <label  >
            verified

            </label>
            <input type="checkbox" id="verified" onclick="cb({{$cafe->id}})" @if($cafe->is_verified) checked @endif>

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
        @if(request()->me=='1')

        map.locate({setView: true, maxZoom: 16});
        const intervalId = window.setInterval(function () {
            map.locate(
                // {setView: true, maxZoom: 16}
            );
        }, 5000);
        @endif


    </script>
</div>
