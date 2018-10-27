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
<div class="alert alert-danger success-block">
	<strong>welcome {{ Auth::user()->email }}</strong>
	<br />
	 <li class="nav-item dropdown">
      <a id="navbarDropdown" class="nav-link dropdown-toggle"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        welcome  {{ Auth::user()->name }} <span class="caret"></span>
          </a>
          <img src="" id="navbarDropdown" class="nav-link dropdown-toggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>{{ Auth::user()->url }}
           <span class="caret"></span>
          
      
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>

<a href="{{ url('/main/logout')}}">LogOUT</a>
	<br />
</div>
@else
<script >window.location= "/main";</script>
@endif
<br />
</div>
</body>
</html>
