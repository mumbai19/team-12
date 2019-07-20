@extends('entrep.dashboard.Nav1')

@section('content')
<head><style>
            .card-success{
                background-color: azure;
            }
        .card1{
            margin: 0.1rem;
            border-radius: 0px 0px 10px 10px;
            
            
        }
        .card-h{
            color: black;
            border-radius:10px 10px 10px 10px ;
        } 
        .card-b{
            background-color: bisque;
        }
        </style></head>
<h1>Nearby Farmers</h1><hr>
    <div id="map" ></div>
    <div id="accordion" >
            @if($int)
        @foreach ($int as $a)
        
        <div class="card card1 " >
                <div  class="  card-h card-header text-center bg-primary"  id="he{{$a->id}}" data-toggle="collapse" data-target="#co{{$a->id}}" aria-expanded="false" aria-controls="co{{$a->id}}">
                       <p style="color:black;" > <b>Name:</b>  &nbsp; {{$a->name}}</p>
                <p style="color:black;"> <b>Address: </b> &nbsp; {{$a->address}}</p> 
                        
                </div>
                <div id="co{{$a->id}}" class="collapse" aria-labelledby="he{{$a->id}}" data-parent="#accordion">
                  <div class="card-body card-b">
                     
                        <div ><span style="{float:left;color:black;}"><b>Product Name:</b> {{$a->name1}}</span> <br>
                        <span style="{display:inline-block;color:black;}"><b>Cost:</b> Rs.{{$a->cost}}</span> <br> <span style="float:left;color:black;"><b>Contact:</b> &nbsp; {{$a->contact}}</span> </div>
                           
                  </div>
                </div>
              </div>
        @endforeach
        @endif

        @if($asc)
        @foreach ($asc as $a)
        <div class="card card1 card-success" >
                <div class=" card-h card-header text-center" id="he{{$a->id}}" data-toggle="collapse" data-target="#co{{$a->id}}" aria-expanded="false" aria-controls="co{{$a->id}}">
                       <p style="color:black;" > <b>Name:</b>  &nbsp; {{$a->name}}</p>
                <p style="color:black;"> <b>Address: </b> &nbsp; {{$a->address}}</p> 
                        
                </div>
                <div id="co{{$a->id}}" class="collapse" aria-labelledby="he{{$a->id}}" data-parent="#accordion">
                  <div class="card-body card-b">
                     
                        <div ><span style="{float:left;color:black;}"><b>Product Name:</b> {{$a->name1}}</span> <br>
                <span style="{display:inline-block;color:black;}"><b>Cost:</b> Rs.{{$a->cost}}</span>  <span style="float:right;">
                    <form action="/farmer/ntr" method="GET">
                    <input type="hidden" name="eid" value="{{$eid}}">
                    <input type="hidden" name="fid" value="{{$a->id}}">
                    <button type="submit" class="btn btn-info">Interested</button>
                </form>
                
                </span> </div>
                           
                  </div>
                </div>
              </div>
        @endforeach
        @endif

        </div>

      
    

     
 
   <script>
      var geocoder;
      var map;
      var address = <?php echo json_encode($map) ?>;
      console.log(address)
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
          
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
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-SOgIU7H_vEjyyGfDemVWR_gTJVBVq0E&callback=initMap">
    </script>


@endsection
