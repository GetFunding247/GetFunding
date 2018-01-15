<!DOCTYPE html>
<html lang="en">
@if(Auth::user())
<head>
  
  <title>Get Funding</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
  }
  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;      
      font-size: 20px;
      color: #111;
  }
  .container {
      padding: 80px 120px;
  }
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 0.7;
  }
  .person:hover {
      border-color: #f1f1f1;
  }
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
      background: #2d2d30;
      color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
  }
  .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail p {
      margin-top: 15px;
      color: #555;
  }
  .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }
  .btn:hover, .btn:focus {
      border: 1px solid #333;
      background-color: #fff;
      color: #000;
  }
  .modal-header, h4, .close {
      background-color: #333;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-header, .modal-body {
      padding: 40px 50px;
  }
  .nav-tabs li a {
      color: #777;
  }
  #googleMap {
      width: 100%;
      height: 400px;
      -webkit-filter: grayscale(100%);
      filter: grayscale(100%);
  }  
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #2d2d30;
      border: 0;
      font-size: 13px !important;
      letter-spacing: 4px;
      opacity: 0.9;
        
     
  }
  .navbar li a, .navbar .navbar-brand { 
      color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
      color: #fff !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  .open .dropdown-toggle {
      color: #fff;
      background-color: #555 !important;
  }
  .dropdown-menu li a {
      color: #000 !important;
  }
  .dropdown-menu li a:hover {
      background-color: purple !important;
  }
  footer {
      background-color: #2d2d30;
      color: #f5f5f5;
      padding: 32px;
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }  
  .form-control {
      border-radius: 0;
  }
  textarea {
      resize: none;
  }
  
  #inner_reply{

margin-left: 800px;
margin-top: 160px;
width: 100px;
height: 30px;
background-color: #2c95dc;
text-align: center;
font-size: 18px;
color: white;
border-radius: 18px;
}
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Get Funding </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
<li><img src="{{URL::asset('/images/logo.png')}}" alt="Get Funding" width="70" height="50"></a></li>
      <ul class="nav navbar-nav navbar-right">
               <li><a href="{{URL::to('/home')}}">HOME</a></li>
                <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">EVENT LIST
         <span class="caret"></span></a>
         <ul class="dropdown-menu">
         <li><a href="{{URL::to('/event')}}">Create Event</a></li>
         <li><a href="{{URL::to('/top')}}">Top Events</a></li>
          </ul>
         </li>
         <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">BLOG
         <span class="caret"></span></a>
         <ul class="dropdown-menu">
         <li><a href="{{URL::to('/blog')}}">Create New Blog</a></li>
         <li><a href="{{URL::to('/vblog')}}">See All Blogs</a></li>
          </ul>
         </li>
        <li><a href="{{URL::to('/profile')}}" >MY PROFILE</a></li>
        <li><a href="{{URL::to('/logout')}}" >LOGOUT {{ucwords(Auth::user()->name)}}</a></li>  
      </ul>
    </div>
  </div>
</nav>
<br>
<br>
<br>




  
    <div class="container">
    <h3>Read Blog</h3>
    <hr>
    
    <div class="row">
     <h4>Author : {{$blogs->author}}</h4>
     <h4 >Post Title : {{$blogs->title}}</h4>
     <h1 >Description : {{$blogs->description}}</p>
     <!-- reply -->
	 <!-- Creating New Blog(***Note: csrf_field token is used to prevent csrf attacks) -->
<br>
<br>
  <div class="container">
    <div class="col-md-5">

    <h3>Your reply</h3>
     <div class="row">
     <h4>Name : {{$replies->name}}</h4>
     <p>Opinion : {{$replies->opinion}}</p>




<div class="container">
<div class="col-md-5">
    <div class="form-area">  
        <form  method="POST" action="{{ url ('/added') }}">


          {{csrf_field()}}
        <br style="clear:both">
          {{csrf_field()}}
          @if(count($errors)>0)

                  @foreach($errors->all() as $error)

                  <div class="alert alert-danger">{{$error}}</div>

                   @endforeach

                  @endif
                <h3>Reply</h3> 

            <div class="form-group">
              <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
          </div>
       
                    <div class="form-group">
                    <textarea class="form-control" name="opinion" type="textarea" id="opinion" placeholder="Write a reply" maxlength="1000" rows="7"></textarea>                   
                    </div>
            
        <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Submit</button>
        </form>
    </div>
</div>
</div>
   


    </div>
</div>
 
<!-- Container (Contact Section) -->


<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Bootstrap Theme Made By Group4 </p>
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
@endif
</html>
