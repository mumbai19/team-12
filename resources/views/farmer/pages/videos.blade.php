@extends('farmer.dashboard.Nav1')
@section('content')
<section class="content">
    
<div class="row"> 
    <div class="col-sm-12">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">Search</h3>
              <br>
            <div class="card-tools">
              <div class="input-group input-group-sm">
                <input id="filter_query" type="text" class="form-control" placeholder="Search Videos">
                <div class="input-group-append">
                  <div class="btn btn-primary" onclick="filterVideos()">
                    <i class="fa fa-search"></i>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
    </div>  

    <div class="row">

        <!--add for loop here-->

        @foreach($videos as $key=>$value)
            <div class="col-lg-4 col-sm-12">
                <iframe  height="200" width="100%" src="{{ $value->url }}">
                </iframe>
            </div>
        @endforeach

            @if(count($videos) == 0)
                <div class="jumbotron"> <h4>NO Videos to show</h4></div>
                @endif

        
</div>
    </div>
    
  </section>
  <!-- /.content -->

<script>
    function filterVideos() {
        var url = "{{ request()->url() }}";
        if (url.indexOf("filter_query")>0) {
            url = url.split("?")[0];
        }
        console.log(url + "?filter_query=" + $("#filter_query").html());
        window.location.href = url + "?filter_query=" + $("#filter_query").val();

    }
</script>
@stop