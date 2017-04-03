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
				<div class="col-md-8 col-md-offset-2">
					<form class="form-horizontal">
  						<fieldset>
							<div class="form-group col-lg-4">
						      <label for="select" class="control-label"><span class="glyphicon glyphicon-filter" aria-hidden="true"></span> Status</label>
						        <select class="form-control" id="select">
						          <option>Todos</option>
						          <option>Pendentes</option>
						          <option>Respondidos</option>
						          <option>Resolvidos</option>
						          <option>Não Resolvidos</option>
						        </select>
						    </div>
						</fieldset>
					</form>
				</div>
			</div>

			<div class="row">
				<div class="col-md-8 col-md-offset-2">

					<div class="panel panel-warning showModal" data-toggle="modal" data-target="#myModal">
					  <div class="panel-body">
					  	<div class="col-lg-4">
					  		<div class="img-ocorrencia" style="background-image: url(assets/img/rua.jpg)">
					  			<p><span class="label label-warning">Pendente</span></p>
					  		</div>
					  	</div>
					  	<div class="col-lg-4 panel-desc">
							<p>
							<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Nome Completo do Usuário<br/>
							<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> 02/04/2017<br/>
							<span class="glyphicon glyphicon-time" aria-hidden="true"></span> 21:15:17
							</p>
					  	</div>
					  	<div class="col-lg-8">
					  		<p>
					  		Descrição da ocorrência descrição da ocorrência descrição da ocorrência descrição da ocorrência descrição da ocorrência descrição da ocorrência descrição da ocorrência descrição da ocorrência
					  		descrição da ocorrência descrição da ocorrência
					  		</p>
					  	</div>
					  </div>
					</div>

					<div class="panel panel-info showModal" data-toggle="modal" data-target="#myModal">
					  <div class="panel-body">
					  	<div class="col-lg-4">
					  		<div class="img-ocorrencia" style="background-image: url(assets/img/rua.jpg)">
					  			<p><span class="label label-info">Respondido</span></p>
					  		</div>
					  	</div>
					  	<div class="col-lg-4 panel-desc">
					  		<p>
						  	<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Nome Completo do Usuário<br/>
						  	<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> 02/04/2017<br/>
						  	<span class="glyphicon glyphicon-time" aria-hidden="true"></span> 21:15:17
						  	</p>
					  	</div>
					  	<div class="col-lg-8">
					  		<p>
					  		Descrição da ocorrência descrição da ocorrência descrição da ocorrência descrição da ocorrência descrição da ocorrência descrição da ocorrência descrição da ocorrência descrição da ocorrência
					  		descrição da ocorrência descrição da ocorrência
					  		</p>
					  	</div>
					  	<div class="col-lg-12">
					  		<div class="panel panel-default panel-resp">
					  			<div class="panel-body">
					  				<div class="col-md-6 panel-resp-info">
									  	<span class="glyphicon glyphicon-user" aria-hidden="true"></span> Nome Completo do Síndico
					  				</div>
					  				<div class="col-md-3 panel-resp-info">
					  					<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> 02/04/2017
					  				</div>
					  				<div class="col-md-3 panel-resp-info">
					  					<span class="glyphicon glyphicon-time" aria-hidden="true"></span> 21:15:17
					  				</div>
					  				<div class="col-md-12 panel-resp-desc">
					  					Descrição da resposta descrição da resposta descrição da resposta descrição da resposta descrição da resposta descrição da resposta
					  				</div>
					  				<div class="col-lg-12 panel-resp-info"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> <strong>Prazo: 07/04/2017</strong>
					  				</div>
					  			</div>
					  		</div>
					  	</div>
					  </div>
					</div>

					<div class="panel panel-success showModal" data-toggle="modal" data-target="#myModal">
					  <div class="panel-body">
					  	<div class="col-lg-4">
					  		<div class="img-ocorrencia" style="background-image: url(assets/img/rua.jpg)">
					  			<p><span class="label label-success">Resolvido</span></p>
					  		</div>
					  	</div>
					  	<div class="col-lg-4 panel-desc">
					  		<p>
						  	<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Nome Completo do Usuário<br/>
						  	<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> 02/04/2017<br/>
						  	<span class="glyphicon glyphicon-time" aria-hidden="true"></span> 21:15:17
						  	</p>
					  	</div>
					  	<div class="col-lg-8">
					  		<p>
					  		Descrição da ocorrência descrição da ocorrência descrição da ocorrência descrição da ocorrência descrição da ocorrência descrição da ocorrência descrição da ocorrência descrição da ocorrência
					  		descrição da ocorrência descrição da ocorrência
					  		</p>
					  	</div>
					  	<div class="col-lg-12">
					  		<div class="panel panel-default panel-resp">
					  			<div class="panel-body">
					  				<div class="col-md-6 panel-resp-info">
									  	<span class="glyphicon glyphicon-user" aria-hidden="true"></span> Nome Completo do Síndico
					  				</div>
					  				<div class="col-md-3 panel-resp-info">
					  					<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> 02/04/2017
					  				</div>
					  				<div class="col-md-3 panel-resp-info">
					  					<span class="glyphicon glyphicon-time" aria-hidden="true"></span> 21:15:17
					  				</div>
					  				<div class="col-md-12 panel-resp-desc">
					  					Descrição da resposta descrição da resposta descrição da resposta descrição da resposta descrição da resposta descrição da resposta
					  				</div>
					  			</div>
					  		</div>
					  	</div>
					  </div>
					</div>

					<div class="panel panel-danger showModal" data-toggle="modal" data-target="#myModal">
					  <div class="panel-body">
					  	<div class="col-lg-4">
					  		<div class="img-ocorrencia" style="background-image: url(assets/img/rua.jpg)">
					  			<p><span class="label label-danger">Não resolvido</span></p>
					  		</div>
					  	</div>
					  	<div class="col-lg-4 panel-desc">
					  		<p>
						  	<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Nome Completo do Usuário<br/>
						  	<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> 02/04/2017<br/>
						  	<span class="glyphicon glyphicon-time" aria-hidden="true"></span> 21:15:17
						  	</p>
					  	</div>
					  	<div class="col-lg-8">
					  		<p>
					  		Descrição da ocorrência descrição da ocorrência descrição da ocorrência descrição da ocorrência descrição da ocorrência descrição da ocorrência descrição da ocorrência descrição da ocorrência
					  		descrição da ocorrência descrição da ocorrência
					  		</p>
					  	</div>
					  	<div class="col-lg-12">
					  		<div class="panel panel-default panel-resp">
					  			<div class="panel-body">
					  				<div class="col-md-6 panel-resp-info">
									  	<span class="glyphicon glyphicon-user" aria-hidden="true"></span> Nome Completo do Síndico
					  				</div>
					  				<div class="col-md-3 panel-resp-info">
					  					<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> 02/04/2017
					  				</div>
					  				<div class="col-md-3 panel-resp-info">
					  					<span class="glyphicon glyphicon-time" aria-hidden="true"></span> 21:15:17
					  				</div>
					  				<div class="col-md-12 panel-resp-desc">
					  					Descrição da resposta descrição da resposta descrição da resposta descrição da resposta descrição da resposta descrição da resposta
					  				</div>
					  			</div>
					  		</div>
					  	</div>
					  </div>
					</div>										
				</div>
			</div>

		</div>
	</div>

	<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	      	<span id="modal-status"></span>
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	      </div>
	      <div class="modal-body">
	        <img id="modal-img" src="">
	      </div>
	    </div>

	  </div>
	</div>
</body>
</html>