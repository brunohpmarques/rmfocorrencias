<!DOCTYPE html>
<html>
<head>
	<title>MF Ocorrências - Login</title>
	<? include_once("head.php"); ?>
</head>
<body>
	<div class="wrapper">
		<div class="container">
			<div class="col-sm-6 col-sm-offset-3 well bs-component">
				<form class="form-horizontal">
				  <fieldset>
				    <legend>Login</legend>

				    <div class="form-group">
				      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
				      <div class="col-lg-10">
				        <input type="text" class="form-control" id="inputEmail" required>
				      </div>
				    </div>

				    <div class="form-group">
				      <label for="inputPassword" class="col-lg-2 control-label">Senha</label>
				      <div class="col-lg-10">
				        <input type="password" class="form-control" id="inputPassword" required>
				      </div>
				    </div>

				    <div class="form-group">
				      <div class="col-lg-12 col-lg-offset-2">
				      	<button type="submit" class="btn btn-primary">entrar</button>
				        <a href="recovery.php" class="btn">esqueceu a senha?</a>
				      </div>
				    </div>
				  </fieldset>
				</form>
			</div>
		</div>
	</div>
</body>
</html>