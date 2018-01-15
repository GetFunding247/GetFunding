

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
h1{
 color:Black;
}
h2,h4{
    color : white;
}

input{
 width:150px;
 height:30px;
}
input[type="submit"]{
   background: #3399ff;
  border: 0;
  width: 120px;
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
  <p>Welcome To Get Funding!</p> 
</div>

<div class="container">

  <div class="row">
 
    <div class="col-sm-6">
	<h1>Register</h1>

@if(Session::has('success'))
<div class="row">
  <div class="col-md-12">
    <div class="alert alert-success">
      {{Session::get('success')}}
    </div>
  </div>
</div>
@endif

	<form method="POST" action="register_action">
		{{csrf_field() }}
		<div class="form-group">
			<label for="name">Name:</label>
			<input type="text" class="form-control" id="name" name="name">
      @if ($errors->has('name'))..<p>{{$errors->first('name')}}</p>@endif
		</div>

		<div class="form-group">
			<label for="email">Email:</label>
			<input type="email" class="form-control" id="email" name="email">
       @if ($errors->has('email'))..<p>{{$errors->first('email')}}</p>@endif
		</div>

		<div class="form-group">
			<label for="password">Password:</label>
			<input type="password" class="form-control" id="password" name="password">
       @if ($errors->has('password'))..<p>{{$errors->first('password')}}</p>@endif
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-primary">Sign Up</button>
		</div>

    <a href="{{URL::to('/')}}">Login to Your Account</a> </h4>

    </form>
	
</div>
   
  </div>
</div>
</body>

