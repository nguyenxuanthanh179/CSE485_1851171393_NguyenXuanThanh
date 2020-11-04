<!DOCTYPE html>
<html> 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Đăng ký</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/register.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>
<!--Coded with love by Mutiullah Samim-->
<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100" style="margin-top:200px;">
			<div class="user_card " style=" width: 450px; height:650px;">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<a href="index.php">
                            <img src="images/tải xuống.png" class="brand_logo" alt="Logo">
                        </a>
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form class="form-horizontal" method="post" action="process-register.php">

                        <div class="form-group">
                            <label for="txtFirstName" class="cols-sm-2 control-label">First Name</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                <span class="input-group-addon icons"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="txtFirstName" id="txtFirstName" placeholder="Your first name"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="txtLastName" class="cols-sm-2 control-label">Last Name</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon icons"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="txtLastName" id="txtLastName" placeholder="Your last name"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="cols-sm-2 control-label">Your Email</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon icons"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>

                                    <input type="text" class="form-control" name="txtEmail" id="txtEmail" placeholder="Your Email" />
                                </div>
                            </div>
                        </div>
        
                        <div class="form-group">
                            <label for="password" class="cols-sm-2 control-label">Password</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon icons"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>

                                    <input type="password" class="form-control" name="txtPassword1" id="txtPassword1" placeholder="Your Password" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon icons"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>

                                    <input type="password" class="form-control" name="txtPassword2" id="txtPassword2" placeholder="Confirm your Password"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <input type="submit" class="btn btn-primary btn-lg btn-block login-button" name="sbmRegister" id="sbmRegister" value="Register">
                        </div>
                        <div class="login-register">
                            <a href="login.php">Login</a>
                        </div>
                    </form>
			</div>
		</div>
	</div>


    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

</body>
</html>
