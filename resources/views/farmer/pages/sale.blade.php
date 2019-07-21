@extends('farmer.dashboard.Nav1')
@section('content')
@if(request()->route()->uri() == "farmer/products")

    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ url()->current() }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="fishname">Fish Name:</label>
                                <input name="fishname" type="text" class="form-control" id="fishname">
                            </div>
                            <div class="form-group">
                                <label for="tags">Categories:</label>
                                <input name="tags" type="text" class="form-control" id="tags">
                            </div>
                            <div class="form-group">
                                <label for="text">Description:</label>
                                <input name="text" type="text" class="form-control" id="text">
                            </div>
                            <div class="form-group">
                                <label for="cost">Cost</label>
                                <input name="cost" type="text" class="form-control" id="cost">
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Fish Name</th>
                                    <th>Categories</th>
                                    <th>Description</th>
                                    <th>Cost</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach(auth()->user()->farmer_products as $key=>$value)
                                    <tr>
                                        <th scope="row">{{$loop->index + 1 }}</th>
                                        <td>{{ $value->fishname }}</td>
                                        <td>{{ $value->tags }}</td>
                                        <td>{{ $value->text }}</td>
                                        <td>{{  '₹'.$value->cost }}</td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @else
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ url()->current() }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name">Product Name:</label>
                                <input name="name" type="text" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="tags">Categories:</label>
                                <input name="tags" type="text" class="form-control" id="tags">
                            </div>
                            <div class="form-group">
                                <label for="text">Description:</label>
                                <input name="text" type="text" class="form-control" id="text">
                            </div>
                            <div class="form-group">
                                <label for="cost">Cost</label>
                                <input name="cost" type="text" class="form-control" id="cost">
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Striped table with hover effect</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Product Name</th>
                                    <th>Categories</th>
                                    <th>Description</th>
                                    <th>Cost</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach(\App\User::first()->products as $key=>$value)
                                    <tr>
                                        <th scope="row">{{$loop->index + 1 }}</th>
                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->tags }}</td>
                                        <td>{{ $value->text }}</td>
                                        <td>{{ '₹'.$value->cost }}</td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
@stop