@extends('farmer.dashboard.Nav1')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Information about Pond') }}</div>

                <div class="card-body">
                    <form method="POST" >
                        @csrf

                        <div class="form-group row">
                            <label  class="col-md-4 col-form-label text-md-right">pH of Pond</label>

                            <div class="col-md-6">
                                <input  type="number"  required autofocus>
                            </div>
                            <label>/L</label>
                        </div>

                        <div class="form-group row">
                            <label  class="col-md-4 col-form-label text-md-right">Dissolved O <sub>2</sub> </label>

                            <div class="col-md-6">
                                <input  type="number"  required autofocus>
                            </div>
                            <label>mg/L</label>
                        </div>

                        <div class="form-group row">
                            <label  class="col-md-4 col-form-label text-md-right">Area of Pond </label>

                            <div class="col-md-6">
                                <input  type="number"  required autofocus>
                            </div>
                            <label >m <sup>2</sup></label>
                        </div>

                        <div class="form-group row">
                            <label  class="col-md-4 col-form-label text-md-right">Depth of Pond </label>

                            <div class="col-md-6">
                                <input  type="number"  required autofocus>
                            </div>
                            <label >metres</label>
                        </div>










                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection