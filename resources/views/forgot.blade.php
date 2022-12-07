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
		
		<form  action="/change" method="post" class="form-validate form-horizontal well" enctype="multipart/form-data">
				@csrf<legend>Enter email to change your password</legend>
				<div class="form-group">
					<label for="exampleInputPassword1">Email *</label>
					<input type="text" name="email" class="form-control" id="exampleInputPassword1" >
				</div>
				
        
				<div class="d-flex justify-content-between align-items-center">
					<div class="form-group d-flex justify-content-start">
						<button type="submit" class="btn btn-primary">change password</button>
					</div>
                    <!-- <a href="">hello</a> -->
					
					
		</form>
	</div>
</div></fieldset>
    </body>
    </html>