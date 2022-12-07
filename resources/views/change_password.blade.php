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
			<h1>Change Password</h1>
		</div>
		@foreach($userss as $user)
		<form  action="password/{{$user->Id}}" method="post" class="form-validate form-horizontal well" enctype="multipart/form-data">
				@csrf
				<!-- <h4>Your mail is {{session('username')}}</h4><br> -->
				<table>
					<tr>
						
						<td style="color:purple">{{$user->Username}}</td>
						@endforeach
					</tr>

			</table><br>
				<div class="form-group">
					<label for="exampleInputPassword1">password *</label>
					<input type="text" name="password" class="form-control" id="exampleInputPassword1" >
				</div>
				
        
				<div class="d-flex justify-content-between align-items-center">
					<div class="form-group d-flex justify-content-start">
						<button type="submit"  class="btn btn-primary">change password</button>
					</div>
					
					
		</form>
	</div>
</div></fieldset>
    </body>
    </html>