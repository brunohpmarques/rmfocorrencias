<!DOCTYPE html>
<html>
<head>
	<title>MF Ocorrências</title>
	<? include_once("head.php"); ?>
</head>
<body>
	<? include_once("header.php"); ?>
	<div class="wrapper">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">

					<div class="panel panel-default">
					  <div class="panel-body">
					  	<div class="col-lg-12">

					  		<form class="form-horizontal">
							  <fieldset>
							    <legend>Nova Ocorrência</legend>
							  	<div class="form-group">
							      <div class="col-lg-12">
							      	<p>
							      	<span class="glyphicon glyphicon-user" aria-hidden="true"></span> Nome Completo do Usuário<br/>
							      	<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> 02/04/2017<br/>
							      	<span class="glyphicon glyphicon-time" aria-hidden="true"></span> 21:15:17
							      	</p>
							      </div>
							    </div>
							    <div class="form-group">
							      <label for="inputEmail" class="col-lg-2 control-label">Foto</label>
							      <div class="col-lg-10">
							        <input type="file" class="form-control" id="inputEmail">
							      </div>
							    </div>
							    <div class="form-group">
							      <label for="textArea" class="col-lg-2 control-label">Descrição</label>
							      <div class="col-lg-10">
							        <textarea class="form-control" rows="3" id="textArea"></textarea>
							        <span class="help-block">Adicione uma descrição de até 250 caracteres.</span>
							      </div>
							    </div>
							    <div class="form-group">
							      <div class="col-lg-10 col-lg-offset-2">
							        <a href="index.php" class="btn btn-default">Cancelar</a>
							        <button type="submit" class="btn btn-primary">Enviar</button>
							      </div>
							    </div>
							  </fieldset>
							</form>
					  	</div>
					  	
					  </div>
					</div>
								
				</div>
			</div>

		</div>
	</div>
</body>
</html>