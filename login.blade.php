<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome Page of Get Funding</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
body{
background-image:url('{{URL::asset('/images/166352022.jpg')}}');
 -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  color: #2d2d2d;
   }
.login {

  width: 250px;
  position: absolute;
  top: 60%;
  left: 50%;
  margin: -184px 0px 0px -155px;
  background: rgba(0,0,0,0.5);
  padding: 20px 30px;
  border-radius: 5px;
  box-shadow: 0px 1px 0px rgba(0,0,0,0.3),inset 0px 1px 0px rgba(255,255,255,0.07)
}

h3{
 color:red;
}
h1,h4{
    color : white;
}
h2{
  color : purple;
}
input{
 width:250px;
 height:30px;
}
input[type="submit"]{
   background: #3399ff;
  border: 0;
  width: 250px;
  height: 40px;
  border-radius: 3px;
  color: white;
  cursor: pointer;
  transition: background 0.4s linear;
}
</style><center>
   
</head>
<body>
.
<div class="jumbotron text-center">
  <h1><img src="{{URL::asset('/images/logo.png')}}" alt="Get Funding" width="144" height="129"></h1>
  </div>

<div class="container">

  <div class="row">
  <div class="col-sm-6">
<form method="POST" action="login_check">
  {{csrf_field() }}
<h1>Login</h1>
<h4>Haven't any account? <a href="{{URL::to('/register')}}">Sign Up</a> </h4>
<input type="email" name="email" id="email" placeholder="Email" required><br>
 @if ($errors->has('email'))..<p>{{$errors->first('email')}}</p>@endif<br>
<input type="password" name="password" id="password" placeholder="Password" required><br>
  @if ($errors->has('password'))..<p>{{$errors->first('password')}}</p>@endif<br>
<h4><a href="{{URL::to('/reset')}}">Forget Password</a></h4>
<input type="submit" name="submit" id="submit">

</form>
</div>
    
  
<div class="col-sm-6">
      <h2>Welcome to the world of donation!</h2>
      <h3> Helping others is now so easier that you have never even thought of! To love is to stay closed!</h3>
        <h3>As we all know, sharing is caring! So why waiting? Share your hand to the people of need. Let’s extend Love ! </h3>
      
    </div>
    

   
  </div>
</div>
</body>






</html>
