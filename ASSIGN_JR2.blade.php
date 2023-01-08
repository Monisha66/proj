<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .fakeimg {
	width: 400px;
    height: 200px;
  }
  mark.blue {
    color:#0066ff;
    background: none;
}
  </style>
</head>
<body>

<div class="p-5 bg-primary text-white text-center">
  
  <h5>Laravel Project Assignment </h5> 
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid" style="align-items: center;display: flex;justify-content: center;">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="#">Dashoard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Schedule</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Booking</a>
      </li>
    </ul>
  </div>
</nav>

<label style="margin-left:40px;width:35%; font-size:20px;">Karma yoga you have <mark class="blue">3 activities</mark> live on Switch. </label><br>
<label style="margin-left:40px;width:35%; font-size:20px;">You've had <mark class="blue">6524 people</mark> look at your activities this month.</label><br>
<label style="margin-left:40px;width:35%; font-size:20px;"> You managed to turn that into <mark class="blue">52 bookings</mark></label>
<div class="container mt-5">
  <div style="margin-left=40px" class="row">
    <div class="col-sm-4">
      
      
      <div class="fakeimg"> <img src="{{url('image/pic1.jpg')}}" width="400" height="200"/></div>
      
      
      <ul class="nav nav-pills flex-column">
        <div class="fakeimg"><img style="padding-top:25px;" src="{{url('image/pic3.jpg')}}" width="400" height="200"/></div>
      </ul>
      <hr class="d-sm-none">
    </div>
	
	
    <div class="col-sm-8">
      <div class="fakeimg"><img style="padding-left:50px;" src="{{url('image/pic2.jpg')}}" width="400" height="200"/></div>
      
      
      <div class="fakeimg"><img style="padding-top:25px;padding-left:50px;" src="{{url('image/pic4.jpg')}}" width="400" height="200"/></div>
       
    </div>
  </div>
</div>

<div class="mt-5 p-4 bg-dark text-white text-center">
  <p>Footer</p>
</div>

</body>
</html>
