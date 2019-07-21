@extends('community_member.dashboard.Nav1')
@section('content')
<div class="card">
<div class="card-body card-outline">
<form action="/community/uploadfile" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    Select CSV:
    <input type="file" name="csv" id="fileToUpload" class="btn btn-success"><br><br>
    <input type="submit" value="Upload" class="btn btn-success" name="submit">
</form>
</div>
</div>
@stop
