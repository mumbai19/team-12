@extends('experts.dashboard.Nav1')

@section('content')
    <div class="container">
        <h2>Verification</h2>

        <form class="form-inline" action="/action_page.php">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="name" class="form-control" id="name" placeholder="Search by name" name="name">
            </div>
            <select class="form-control">
                <option>Farmer</option>
                <option>Expert</option>
                <option>Enterpreneur</option>
            </select>

            <button type="submit" class="btn btn-default">Search</button>
        </form>



        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Contact details</th>
                    <th>Email</th>
                    <th>Type</th>
                    <th>Verify</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Anna</td>
                    <td>Pitt...gdh.hfjf.yt...dy  dhdh hh dgh h</td>
                    <td>359999999</td>
                    <td>New York.....</td>
                    <td>Farmer</td>
                    <td><button type="button" class="btn btn-success">Verify</button></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Anna</td>
                    <td>Pitt...gdh.hfjf.yt...dy  dhdh hh dgh h</td>
                    <td>359999999</td>
                    <td>New York.....</td>
                    <td>Farmer</td>
                    <td><button type="button" class="btn btn-success">Verify</button></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    @stop