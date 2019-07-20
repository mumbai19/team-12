@extends('farmer.dashboard.Nav1')
@section('content')
<section class="content">
<form action="/action_page.php">
  <div class="form-group">
    <label for="fishname">Fish Name:</label>
    <input type="text" class="form-control" id="fishname">
  </div>
  <div class="form-group">
    <label for="tags">Tags:</label>
    <input type="text" class="form-control" id="tags">
  </div>
  <div class="form-group">
    <label for="text">Text</label>
    <input type="text" class="form-control" id="text">
  </div>
  <div class="form-group">
    <label for="cost">Cost</label>
    <input type="text" class="form-control" id="cost">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</section>
@stop