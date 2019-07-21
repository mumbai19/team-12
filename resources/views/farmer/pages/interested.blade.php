@extends('farmer.dashboard.Nav1')

@section('content')
<h1>Interested Entrepreneurs</h1><hr>
    
    <div id="accordion" class="list-group">
        @foreach ($asc as $a)
          
         
        <div class="card list-group-item">
  
            
              <b>Name:</b>  &nbsp; &nbsp;  {{$a->name}} <br>
              <b>Address:</b> &nbsp; &nbsp; {{$a->address}}<br>
              <b>Contact:</b> &nbsp; &nbsp; {{$a->contact}}
            
          </div>
          
        </div>
        
        @endforeach
    </div>
    @stop