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
				<div class="col-sm-6 col-sm-offset-2">
					<form class="form-horizontal">
  						<fieldset>
							<div class="form-group">
						      <label for="select" class="col-lg-2 control-label"><span class="glyphicon glyphicon-filter" aria-hidden="true"></span> Filtrar</label>
						      <div class="col-lg-4">
						        <select class="form-control" id="select">
						          <option>Pendente</option>
						          <option>Respondido</option>
						          <option>Resolvido</option>
						          <option>Não Resolvido</option>
						        </select>
						      </div>
						    </div>
						</fieldset>
					</form>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">

					<div class="panel panel-warning">
					  <div class="panel-body">
					  	<div class="col-lg-4">
					  		<div class="img-ocorrencia" style="background-image: url(assets/img/rua.jpg)"></div>
					  	</div>
					  	<div class="col-lg-8">
					  		<p>
					  		Descrição da ocorrência descrição da ocorrência descrição da ocorrência descrição da ocorrência descrição da ocorrência descrição da ocorrência descrição da ocorrência descrição da ocorrência
					  		descrição da ocorrência descrição da ocorrência
					  		</p>
					  	</div>
					  	<div class="col-lg-4 panel-desc">
					  		<p><span class="label label-warning"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> Pendente</span></p>
					  		<p>
						  	<span class="glyphicon glyphicon-user" aria-hidden="true"></span> Nome Completo do Usuário<br/>
						  	<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> 02/04/2017<br/>
						  	<span class="glyphicon glyphicon-time" aria-hidden="true"></span> 21:15:17
						  	</p>
					  	</div>
					  </div>
					</div>

					<div class="panel panel-info">
					  <div class="panel-body">
					  	<div class="col-lg-4">
					  		<div class="img-ocorrencia" style="background-image: url(assets/img/rua.jpg)"></div>
					  	</div>
					  	<div class="col-lg-8">
					  		<p>
					  		Descrição da ocorrência descrição da ocorrência descrição da ocorrência descrição da ocorrência descrição da ocorrência descrição da ocorrência descrição da ocorrência descrição da ocorrência
					  		descrição da ocorrência descrição da ocorrência
					  		</p>
					  	</div>
					  	<div class="col-lg-4 panel-desc">
					  		<p><span class="label label-info"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> Respondido</span></p>
					  		<p>
						  	<span class="glyphicon glyphicon-user" aria-hidden="true"></span> Nome Completo do Usuário<br/>
						  	<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> 02/04/2017<br/>
						  	<span class="glyphicon glyphicon-time" aria-hidden="true"></span> 21:15:17
						  	</p>
					  	</div>
					  </div>
					</div>

					<div class="panel panel-success">
					  <div class="panel-body">
					  	<div class="col-lg-4">
					  		<div class="img-ocorrencia" style="background-image: url(assets/img/rua.jpg)"></div>
					  	</div>
					  	<div class="col-lg-8">
					  		<p>
					  		Descrição da ocorrência descrição da ocorrência descrição da ocorrência descrição da ocorrência descrição da ocorrência descrição da ocorrência descrição da ocorrência descrição da ocorrência
					  		descrição da ocorrência descrição da ocorrência
					  		</p>
					  	</div>
					  	<div class="col-lg-4 panel-desc">
					  		<p><span class="label label-success"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> Resolvido</span></p>
					  		<p>
						  	<span class="glyphicon glyphicon-user" aria-hidden="true"></span> Nome Completo do Usuário<br/>
						  	<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> 02/04/2017<br/>
						  	<span class="glyphicon glyphicon-time" aria-hidden="true"></span> 21:15:17
						  	</p>
					  	</div>
					  </div>
					</div>

					<div class="panel panel-danger">
					  <div class="panel-body">
					  	<div class="col-lg-4">
					  		<div class="img-ocorrencia" style="background-image: url(assets/img/rua.jpg)"></div>
					  	</div>
					  	<div class="col-lg-8">
					  		<p>
					  		Descrição da ocorrência descrição da ocorrência descrição da ocorrência descrição da ocorrência descrição da ocorrência descrição da ocorrência descrição da ocorrência descrição da ocorrência
					  		descrição da ocorrência descrição da ocorrência
					  		</p>
					  	</div>
					  	<div class="col-lg-4 panel-desc">
					  		<p><span class="label label-danger"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> Não resolvido</span></p>
					  		<p>
						  	<span class="glyphicon glyphicon-user" aria-hidden="true"></span> Nome Completo do Usuário<br/>
						  	<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> 02/04/2017<br/>
						  	<span class="glyphicon glyphicon-time" aria-hidden="true"></span> 21:15:17
						  	</p>
					  	</div>
					  </div>
					</div>										
				</div>
			</div>

		</div>
	</div>
</body>
</html>