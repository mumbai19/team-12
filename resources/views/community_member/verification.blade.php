@extends('community_member.dashboard.Nav1')

@section('content')
    <div class="container">
        <h2>Verification</h2>

        <form class="form-inline">
            <div class="form-group">
                <label for="filter_query">Name:</label>
                <input type="text" class="form-control" id="filter_query" placeholder="Search by name" name="filter_query">
            </div>
            <select class="form-control" id="role" name="role">
                <option value="1" name="role">Farmer</option>
                <option value="2" name="role">Vendor</option>
                <option value="3" name="role">Expert</option>
                <option value="4" name="role">Enterpreneur</option>
            </select>

            <button type="submit" class="btn btn-default" onclick="filterVideos()">Search</button>
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
                @foreach($not_verified as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->address }}</td>
                    <td>{{ $user->contact }}</td>
                    <td>{{ $user->email  }}</td>
                    <td>@switch($user->role)
                        @case('1')
                            Farmer
                            @break

                        @case('4')
                            Vendor
                            @break

                        @default
                            Default
                            
                    @endswitch</td>
                    <td><button onclick="window.location='/community/verify/'+{{ $user->id }}" type="button" class="btn btn-success">Verify</button></td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

<script>
    function filterVideos() {
        var url = "{{ request()->url() }}";
        if (url.indexOf("filter_query")>0) {
            url = url.split("?")[0];
        }
        console.log(url + "?filter_query=" + $("#filter_query").html());
        window.location.href = url + "?filter_query=" + $("#filter_query").val() + "?role=" $("#role").val();

    }
</script>
    @stop