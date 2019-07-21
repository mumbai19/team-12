@extends('experts.dashboard.Nav1')

@section('content')
  <!-- Essential JS UI widget -->
  <script src="https://cdn.syncfusion.com/17.2.0.28/js/web/ej.web.all.min.js"></script>
<script>
var chartData = [
      { month: 'Jan', sales: 35 },
      { month: 'Feb', sales: 28 },
      { month: 'Mar', sales: 34 },
      { month: 'Apr', sales: 32 },
      { month: 'May', sales: 40 },
      { month: 'Jun', sales: 32 },
      { month: 'Jul', sales: 35 },
      { month: 'Aug', sales: 55 },
      { month: 'Sep', sales: 38 },
      { month: 'Oct', sales: 30 },
      { month: 'Nov', sales: 25 },
      { month: 'Dec', sales: 32 }];



        $(document).ready(function(){

                $("#container").ejChart({

                series: [{
                        dataSource: chartData, 
                        xName: "month", 
                        yName: "sales",
                        type: 'line',
                        name: "Fish Sales Graph",
                        tooltip: {visible: true},
                        text: 'Sales Report Monthwise',
                        primaryYAxis:{
                        labelFormat: '${value}K'
                                },
                        marker: {
                        legend: {
                                visible: true,
                                }
                        }
                        }],
                        });
           $('#pASubmit').click(function(){
                var advice = $('#data').val();
                var comment = $('#comment').val();
                $.ajax({
                url: 'givePersonalizedAdvice',
                type: "GET",
                data: {message: advice, type: comment},
                success: function(data){
                if(data){
                        $('#data').val('');
                        $('#comment').val('');
                        alert('advice sent.');
                }
        }
    });
           }) ; 

           $('#videoSubmit').click(function(){
                var link = $('#link').val();
                var type = $('#type').val();
                var language = $('#language').val();

                $.ajax({
                url: 'uploadVideo',
                type: "GET",
                data: {url: link, type: type, language: language},
                success: function(data){
                if(data){
                        $('#link').val('');
                        $('#type').val('');
                        $('#language').val('');
                        alert('video stored.');
                }
        }
    });
           }) ; 

            $('#adviceSubmit').click(function(){
                var advice = $('#wheatherAdvice').val();
                $.ajax({
                url: 'addAdvice',
                type: "GET",
                data: {advice: advice},
                success: function(data){
                if(data){
                        $('#wheatherAdvice').val('');
                        alert('advice sent.');
                }
        }
    });
           }) ;  
        });
</script>
<div class="wheater" style="margin-bottom:20px">
<a class="weatherwidget-io" href="https://forecast7.com/en/19d0872d88/mumbai/" data-label_1="MUMBAI" data-label_2="WEATHER" data-theme="original" >MUMBAI WEATHER</a>
            <script>
            !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
            </script>
</div>
<div id="container" style=" height: 500px;"></div>
<div class="row" style="margin-bottom:20px">
        <div class="col-12">
        <div class="card card-primary card-outline">
                <div class="card-header">
                <h3 class="card-title">Search</h3>

                <div class="card-tools">
                        <div class="input-group input-group-sm">
                                <input type="text" class="form-control" placeholder="Search video">
                                <div class="input-group-append">
                                        <div class="btn btn-primary">
                                        <i class="fa fa-search"></i>
                                        </div>
                                </div>
                        </div>
                </div>

                </div>
        </div>
        </div> 
        <div class="row col-12">
        <p> Your Uploaded Videos </p>
        </div>
        @foreach ($videos as $video)
    <div class="col-4">
    <iframe height="200" src='{{ $video->url }}'>
            </iframe>
    </div>
        @endforeach
    <div class="col-4">
            <iframe height="200" src="https://www.youtube.com/embed/tgbNymZ7vqY">
            </iframe>
        </div>
        <div class="col-lg-4 col-sm-12">
                <iframe height="200" width="100%"  src="https://www.youtube.com/embed/tgbNymZ7vqY">
                </iframe>
            </div>
</div>
<div class="row col-12">
        <div class="card col-12" style="height:50px;">
         <div class="card-body" style="padding-top: 15px;">
                 <div class="row">
                         <div class="col-4">
                                 Name
                         </div>
                         <div class="col-4">
                                Contact
                          </div>
                        <div class="col-4 text-center">
                                <button class="btn btn-contact" style="    margin-top: -10px;
                                border-radius: 10%;
                                background: #8edede;
                                color: #252323;" data-toggle="modal" data-target="#personalizedAdvice">Give Advice</button>
                        </div>
                 </div>
         </div>
        </div>
</div>


<!-- Modal -->
<div id="personalizedAdvice" class="modal fade" role="dialog">
                <div class="modal-dialog">
              
                  <!-- Modal content-->
                  <form>
                  <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Give personalized advice</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                                <input type="text" class="form-control" placeholder="advice..." id="data">
                        </div>
                        <div class="form-group">
                                <input type="text" class="form-control" placeholder="in response..." id="comment">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" id="pASubmit">Submit</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal" >Close</button>
                    </div>
                  </div>
                </form>
                </div>
 </div>
<div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
              
                  <!-- Modal content-->
                  <form>
                  <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Video</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                                <input type="text" class="form-control" placeholder="Link to YouTube Video" id="link">
                        </div>
                        <div class="form-group">
                                <input type="text" class="form-control" placeholder="add types" id="type">
                        </div>
                        <div class="form-group">
                                <input type="text" class="form-control" placeholder="languages.." id="language">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" id="videoSubmit">Submit</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </form>
                </div>
 </div>

 <div id="advice" class="modal fade" role="dialog">
                <div class="modal-dialog">
              
                  <!-- Modal content-->
                  <form>
                  <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Give Advice</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                                <input type="text" class="form-control" placeholder="Advice...." id="wheatherAdvice">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" id="adviceSubmit">Submit</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </form>
                </div>
 </div>
@endsection