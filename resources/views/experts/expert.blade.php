@extends('experts.dashboard.Nav1')

@section('content')
<div class="wheater" style="margin-bottom:20px">
<a class="weatherwidget-io" href="https://forecast7.com/en/19d0872d88/mumbai/" data-label_1="MUMBAI" data-label_2="WEATHER" data-theme="original" >MUMBAI WEATHER</a>
            <script>
            !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
            </script>
</div>
<div class="row" style="margin-bottom:20px">
        <div class="row col-12">
        <p> Your Uploaded Videos </p>
        </div>
    <div class="col-lg-4 col-sm-12">
            <iframe height="200" src="https://www.youtube.com/embed/tgbNymZ7vqY">
            </iframe>
    </div>
    <div class="col-lg-4 col-sm-12">
            <iframe height="200" src="https://www.youtube.com/embed/tgbNymZ7vqY">
            </iframe>
        </div>
        <div class="col-lg-4 col-sm-12">
                <iframe height="200" src="https://www.youtube.com/embed/tgbNymZ7vqY">
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
                                color: #252323;">View Detail</button>
                        </div>
                 </div>
         </div>
        </div>
</div>


<!-- Modal -->
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
                                <input type="text" class="form-control" placeholder="Link to YouTube Video" name="link">
                        </div>
                        <div class="form-group">
                                <input type="text" class="form-control" placeholder="add types" name="type">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" >Submit</button>
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
                                <input type="text" class="form-control" placeholder="Advice...." name="advice">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" >Submit</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </form>
                </div>
 </div>
@endsection