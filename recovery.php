<!DOCTYPE html>
<html>
<head>
	<title>MF Ocorrências - Esqueceu a senha?</title>
	<? include_once("head.php"); ?>
</head>
<body>
	<div class="wrapper">
		<div class="container">
			<div class="col-sm-6 col-sm-offset-3 well bs-component">
				<form class="form-horizontal">
				  <fieldset>
				    <legend>Esqueceu a senha?</legend>

				    <div class="col-sm-12">
				    	<p>Informe seu email de acesso no campo abaixo para receber uma nova senha.</p>
				    </div>

				    <div class="form-group">
				      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
				      <div class="col-lg-10">
				        <input type="text" class="form-control" id="inputEmail" required>
				      </div>
				    </div>

				    <div class="form-group">
				      <div class="col-lg-12 col-lg-offset-2">
				      	<button type="submit" class="btn btn-primary">gerar nova senha</button>
				        <a href="login.php" class="btn">voltar</a>
				      </div>
				    </div>
				  </fieldset>
				</form>
			</div>
		</div>
	</div>
</body>
</html>