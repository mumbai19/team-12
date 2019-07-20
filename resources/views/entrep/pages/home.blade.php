@extends('entrep.dashboard.Nav1')

@section('content')
<h1>Nearby Farmers</h1><hr>
    <div id="map" ></div>
    <div id="accordion" class="list-group">
        @foreach ($asc as $key => $value) 
          
         
        <div class="card list-group-item">
          <div class="card-header" data-toggle="collapse" href="#{{$key}}">
            
              <b>Name:</b>  &nbsp; {{$key}}  <hr>
              <b>Address:</b> &nbsp; {{$value}}
            
          </div>
          <div id="{{$key}}" class="collapse" data-parent="#accordion">
            <div class="card-body">
              <button class="btn btn-info" type=submit style="float:right;">Interested</button>
            </div>
        </div>
        </div>
        
        @endforeach
    </div>
      
    

     
 
   <script>
      /* var geocoder;
      var map;
      var address = <?php echo json_encode($asc) ?>;
      console.log(address)
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
          center: {lat: -34.397, lng: 150.644}
        });
        geocoder = new google.maps.Geocoder();
        for(x in address)
          codeAddress(geocoder, map,x,address[x]);
      }

      function codeAddress(geocoder, map,x,y) {
        geocoder.geocode({'address': y}, function(results, status) {
          if (status === 'OK') {
            map.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
              map: map,
              position: results[0].geometry.location,
              name:x
            });
          } else {
            alert('Geocode was not successful for the following reason: ' + status);
          }
        });
      } */
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-SOgIU7H_vEjyyGfDemVWR_gTJVBVq0E&callback=initMap">
    </script>


@endsection
