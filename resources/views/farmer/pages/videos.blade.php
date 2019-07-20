@extends('farmer.dashboard.Nav1')
@section('content')
<section class="content">
    
<div class="row"> 
    <div class="col-sm-12">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">Search</h3>

            <div class="card-tools">
              <div class="input-group input-group-sm">
                <input type="text" class="form-control" placeholder="Search Mail">
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
        <table class="table table-hover table-striped">
                <tbody>
                <!--add laravel for loop here for all the videos-->
                <tr>
                  <td>
                  <iframe width="420" height="315" src="https://www.youtube.com/embed/tgbNymZ7vqY?controls=0"></iframe>
                  </td>
                </tr>

                </tbody>
        </table>
    </div>
    
  </section>
  <!-- /.content -->

@stop