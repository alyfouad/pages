@extends('layouts.app')

@section('css')
    <link href="{{ asset('/') }}assets/plugins/jquery-datatable/media/css/dataTables.bootstrap.min.css" rel="stylesheet"
        type="text/css" />
    <link
        href="{{ asset('/') }}assets/plugins/jquery-datatable/extensions/FixedColumns/css/dataTables.fixedColumns.min.css"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('/') }}assets/plugins/datatables-responsive/css/datatables.responsive.css" rel="stylesheet"
        type="text/css" media="screen" />
    <style>
        #map {
            width: 100%;
            height: 500px;
        }
    </style>
@endsection

@section('js')
    <script src="https://maps.googleapis.com/maps/api/js" defer></script>
    <script>
        
    </script>
<script>
$.ajax({
    url: $('#url').val(),
    type: 'GET',
    dataType: 'json',
    success: function (data) {
        if (data.type == 'error') {
            $('form :submit').prop("disabled", false);
            if (typeof data.errors === 'object') {
                for (i in data.errors) {
                    $('[name="' + i + '"]')
                        .closest('.form-group').addClass('has-error');
                    $('#' + i).parent().find(".help-block").html(data.errors[i]).css('opacity', 1)
                }
            } else {
                $this.find('.form_result').html('<div class="alert alert-danger" role="alert">' + data.message + '</div>');
            }
        } else {
            initMap(data);
        }
    }
});

function initMap(data) {

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 16,
        center: new google.maps.LatLng(30.0945700, 31.2730402),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < data.locations.length; i++) {
        if(data.locations[i].last_location) {

            marker = new google.maps.Marker({
                position: new google.maps.LatLng(data.locations[i].last_location.lat, data.locations[i].last_location.lng),
                map: map,
                icon: '{{asset('/assets/img/profiles/')}}/'+data.locations[i].image,
            });
            
            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infowindow.setContent(data.locations[i].last_location.lat);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        
        }
    }
}


</script>

@endsection

@section('content')
    <div class=" container-fluid container-fixed-lg" style="background-color:transparent">
        <!-- START card -->
        <div class="card card-transparent">
            <div class="card-header ">
                <div class="card-title">Live tracking
                </div>
                <ul class="list-unstyled ">
                    @foreach ($users as $user)
                        <li class="m-r-10">
                            <div class="thumbnail-wrapper d32 circular b-white m-r-5 b-a b-white">
                                <img width="35" height="35"
                                    data-src-retina="assets/img/profiles/{{ $user->id }}x.jpg"
                                    data-src="assets/img/profiles/{{ $user->id }}.jpg" alt="Profile Image"
                                    src="assets/img/profiles/{{ $user->id }}.jpg">
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="card-body table-responsive">
                <input id="url" type="hidden" value={{route('live_tracking_data')}}>
                <div id="map"></div>
            </div>
        </div>
        <!-- END card -->
    </div>
@endsection
