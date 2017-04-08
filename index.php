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
						          <option>Pendentes</option>
						          <option>Respondidos</option>
						          <option>Aguardando</option>
						          <option>Resolvidos</option>
						          <option>Não Resolvidos</option>
						          <option selected>Todos</option>
						        </select>
						    </div>
						</fieldset>
					</form>
				</div>
			</div>

			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="panel panel-warning">
					  <div class="panel-body">
					  	<div class="col-lg-4 showOcr" data-toggle="modal" data-target="#ocrModal">
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
					  	<div class="col-lg-8">
					  		<a href="javascript:;" class="btn btn-default btn-xs showResp" data-uri="f662e02c-ec7d-455a-9570-b67e52f04c40" data-type="resp" data-toggle="modal" data-target="#respModal">
					  		<span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> responder
					  		</a>
					  	</div>
					  </div>
					</div>

					<div class="panel panel-info">
					  <div class="panel-body">
					  	<div class="col-lg-4 showOcr" data-toggle="modal" data-target="#ocrModal">
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
					  	<div class="col-lg-8">
					  		<a href="javascript:;" class="btn btn-default btn-xs showResp" data-uri="f662e02c-ec7d-455a-9570-b67e52f04c40" data-type="fina" data-toggle="modal" data-target="#respModal">
					  		<span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> finalizar
					  		</a>
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

					<div class="panel panel-primary">
					  <div class="panel-body">
					  	<div class="col-lg-4 showOcr" data-toggle="modal" data-target="#ocrModal">
					  		<div class="img-ocorrencia" style="background-image: url(assets/img/rua.jpg)">
					  			<p><span class="label label-default">Aguardando avaliação</span></p>
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
					  	<div class="col-lg-8">
					  		<a href="javascript:;" class="btn btn-default btn-xs showAva" data-uri="f662e02c-ec7d-455a-9570-b67e52f04c40" data-toggle="modal" data-target="#avaModal">
					  		<span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> avaliar
					  		</a>
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

					<div class="panel panel-success">
					  <div class="panel-body">
					  	<div class="col-lg-4 showOcr" data-toggle="modal" data-target="#ocrModal">
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
					  		<div class="panel panel-default panel-trep">
						  		<div class="panel-body">
						  			<div class="col-md-6 panel-resp-info">
										<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Nome Completo do Usuário
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
						  			<div class="col-lg-12 panel-resp-info">
						  				<span class="glyphicon glyphicon-fire" aria-hidden="true"></span> <strong>Nota: </strong>
						  				<input type="hidden" id="rating" class="rating" disabled data-readonly value="3" />
					  				</div>
						  		</div>
						  	</div>
					  	</div>
					  </div>
					</div>

					<div class="panel panel-danger">
					  <div class="panel-body">
					  	<div class="col-lg-4 showOcr" data-toggle="modal" data-target="#ocrModal">
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

	<a href="#" style="display: none;" class="btn back-to-top btn-dark btn-fixed-bottom"> <span class="glyphicon glyphicon-chevron-up"></span> </a>

	<? include_once("modal.php"); ?>
</body>
</html>