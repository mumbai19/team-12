<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Drive</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    
    
    <style type="text/css">
        h1{
            display:inline;
            text-align:center;
        }
        #header_link{
            text-decoration:none;
            float:right;
            display:block;
            margin-right:0px;
            clear:left;
            padding:1%;
            
        }
		#logo_link{
			text-decoration:none;
		}
        .carousel {
            width:900px;
            height:300px;
             
        }
        #sign_up{
            text-decoration:none;
            float:right;
            display:block;
            margin-right:0px;
            clear:left;
            padding:1%;
            
        }
    
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>
@include('pages.nav')

​
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav" style="background-color: #555">
      <h4></h4>
      <ul  class="nav nav-pills nav-stacked">
        <li><a href="#">Session Ongoing</a></li>

      </ul><br>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search Blog..">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
    </div>
    