@extends('vendor1.dashboard.Nav1')

@section('content')
<h1>Interested</h1><hr>
    
    <div id="accordion" class="list-group">
        @foreach ($asc as $key => $value)
          
         
        <div class="card list-group-item">
          <div class="card-header" data-toggle="collapse" href="#{{$key}}">
            
              <b>Name:</b>  &nbsp; &nbsp;  {{$key}} <br>
              <b>Address:</b> &nbsp; &nbsp; {{$value}}
            
          </div>
          <div id="{{$key}}" class="collapse" data-parent="#accordion">
            <div class="card-body">
              Sales value
            </div>
        </div>
        </div>
        
        @endforeach
    </div>
    @stop