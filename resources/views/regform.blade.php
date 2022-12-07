<!DOCTYPE html>
<html>
    <head>
    
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
    </head>
    <body>
    <div class="container">
	<div class="registration mx-auto d-block w-100">
		<div class="page-header text-center">
			<h1>Sign up</h1>
		</div>
		
		<form  action="valid_reg" method="post" class="form-validate form-horizontal well" enctype="multipart/form-data">
				@csrf<fieldset><legend>User Registration</legend>
				<div class="form-group">
					<label for="exampleInputPassword1">Username *</label>
					<input type="text" name="username" class="form-control" ><span style="color:red">@error('username'){{$message}}@enderror</span>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">email *</label>
					<input type="email" name="email" class="form-control"><span style="color:red">@error('email'){{$message}}@enderror</span>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">phone number *</label>
					<input type="text" name="phone" class="form-control"><span style="color:red">@error('phone'){{$message}}@enderror</span>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">password *</label>
					<input type="password" name="password" class="form-control"><span style="color:red">@error('password'){{$message}}@enderror</span>
				</div>
        <div class="form-group">
					<label >Super Admin?</label>&nbsp&nbsp
					<!-- <input type="radio" class="form-control" id="superadmin"> -->
          <input type="radio" name="btn" value="yes">yes &nbsp&nbsp
          <input type="radio" name="btn" checked value="no">no
				</div>
				<div class="d-flex justify-content-between align-items-center">
					<div class="form-group d-flex justify-content-start">
						<button type="submit" class="btn btn-primary">Sign up</button>
					</div>
					<div class="form-check form-group d-flex justify-content-end">
						 already a user?<a href="{{url('signin')}}">sign in</a>
					</div>
				</div>
		</form>
	</div>
</div>
</fieldset>
    </body>
    </html>