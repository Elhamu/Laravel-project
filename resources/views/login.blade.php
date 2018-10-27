<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
	.box{
		width:600px;
		margin:0 auto;
		border:1px solid #ccc;
	}
</style>
</head>
<body>
<br />
<div class="container box">
	<h3 align="center"> System To Join US</h3>
<br />
@if(isset(Auth::user()->email))
<script >window.location="/main/successlogin";</script>
@endif


@if($message = Session::get('error'))
<div class="alert alert-danger alert-block"> <button type="button" class="close" data-dismiss="alert"></button>
	<strong>{{ $message }}</strong>
</div>
@endif
@if(count($errors) > 0)
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
	<li>{{ $error }}</li>
	@endforeach
	</ul>
@endif


<form method="post" action="{{ url('/main/checklogin')}}">
	{{ csrf_field() }}
	<div class="form-group">
		<label>Enter Email</label>
		<input type="email" name="email" class="form-control" />
	</div>
	<div class="form-group">
		<label>Enter Password</label>
		<input type="password" name="password" class="form-control" />
	</div>
	<div class="form-group">
		<input type="submit" name="login" class="btn-primary" value="Login" />&nbsp; &nbsp; &nbsp;<a href="{{ route('facebook')}}" class="btn btn-primary">
                                Login With Facebook
                                </a> &nbsp; &nbsp; &nbsp;   <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                              <a class="btn btn-link" href="http://localhost:8000/register">
                                    Not Member
                                </a>
	</div>
</form>

</div>

</body>
</html>