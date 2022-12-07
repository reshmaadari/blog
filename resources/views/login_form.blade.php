<!DOCTYPE html>
<html>
    <head>
    
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
    </head>
    <body><fieldset class="container">
    <div >
	<div class="registration mx-auto d-block w-100">
		<div class="page-header text-center">
			<h1>Sign in</h1>
		</div>
		
		<form  action="/valid_login" method="post" class="form-validate form-horizontal well" enctype="multipart/form-data">
				@csrf<legend>User Login</legend>
				<div class="form-group">
					<label for="exampleInputPassword1">Email *</label>
					<input type="text" name="email" class="form-control" id="exampleInputPassword1" value="{{old('email')}}"><span style="color:red">@error('email'){{$message}}@enderror</span>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password *</label>
					<input type="password" name="password" class="form-control" id="exampleInputPassword1"><span style="color:red">@error('password'){{$message}}@enderror</span>
				</div>
        
				<div class="d-flex justify-content-between align-items-center">
					<div class="form-group d-flex justify-content-start">
						<button type="submit" class="btn btn-primary">Sign in</button>
					</div>
					<div class="form-check form-group d-flex justify-content-end">
						 <a href="{{url('signup')}}">Sign up instead</a> &nbsp;&nbsp;&nbsp;<a href="{{url('forgot')}}">forgot password?</a>
					</div>
					<div class="form-check form-group d-flex justify-content-end">
						
					</div>
					<div  style="color:red" >
                {{ session('status') }}
             </div>
				</div>
		</form>
	</div>
</div></fieldset>
    </body>
    </html>