

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body style="background-image: url(ensajj.jpg)">
	<?php include_once('navsite0.php'); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-4 offset-md-4 form-wrapper">
			<div class="login-panel panel panel-default">

			<div class="panel-heading">
                    </div>
				<div class="panel-body">
				<form action="login.php" method="post">
				<fieldset>
					<div class="form-group" >
						<input type="text" name="username" class="form-control form-control-lg" placeholder="Email" required >
					</div>
					<div class="form-group">
						<input type="password" name="password" class="form-control form-control-lg" placeholder="Mot de passe"  required >
					</div>
					<div class="form-group">
					    <button type="submit"  name="login-btn" class="btn btn-lg btn-success btn-block">Se connecter</button>
                    </div>
						<div class="form-group">
						<button type="submit" name="login-btn" class="btn btn-lg btn-block"><a href="test.php">Mot de passe oubliè ?</a></button>
					</div>
					</fieldset>
				</form>
                      </div>
                       </div>
                 </div>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="script.js"></script>
</body>
</html>