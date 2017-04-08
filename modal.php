
	<!-- Modal IMG -->
	<div id="ocrModal" class="modal fade" role="dialog">
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

	<!-- Modal OCR -->
	<div id="novModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	      	Nova ocorrência
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	      </div>
	      <div class="modal-body">
	        <div class="row">
	        	<div class="col-md-12">
	        		<form class="form-horizontal">
	        			<div class="form-group">
	        				<div class="col-lg-6">
	        					<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Nome Completo do Usuário
							</div>
							<div class="col-lg-3">
								<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> 02/04/2017 
							</div>
							<div class="col-lg-3">
								<span class="glyphicon glyphicon-time" aria-hidden="true"></span> 21:15:17
							</div>

							<div class="col-lg-12">
							  <label for="inputFoto" class="control-label">Foto</label>
							  <input type="file" class="form-control" id="inputFoto">
							</div>

							<div class="col-lg-12">
						      <label for="textArea" class="control-label"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> Comentário</label>
						      <textarea class="form-control" rows="3" id="textArea"></textarea>
						      <span class="help-block">Adicione um comentário de até 250 caracteres.</span>
						    </div>

	        				<div class="col-lg-12">
						      <button type="button" class="btn btn-default btn-sm pull-left" data-dismiss="modal">cancelar</button>
						      <button type="submit" class="btn btn-primary btn-sm">enviar</button>
						    </div>
	        			</div>
	        		</form>
	        	</div>
	        </div>
	      </div>
	    </div>

	  </div>
	</div>

	<!-- Modal RSP-->
	<div id="respModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	      	Responder
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	      </div>
	      <div class="modal-body">
	      	<div class="row">
				<div class="col-md-12">
					<form class="form-horizontal">
  						<div class="form-group">
  							<div class="col-lg-6">
	        					<span class="glyphicon glyphicon-user" aria-hidden="true"></span> Nome Completo do Síndico
							</div>
							<div class="col-lg-3">
								<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> 02/04/2017 
							</div>
							<div class="col-lg-3">
								<span class="glyphicon glyphicon-time" aria-hidden="true"></span> 21:15:17
							</div>

							<div class="col-lg-4">
						      <label for="select" class="control-label"><span class="glyphicon glyphicon-filter" aria-hidden="true"></span> Alterar status</label>
						        <select class="form-control" id="select">
						          <option>Responder</option>
						          <option>Resolver</option>
						          <option>Não Resolver</option>
						        </select>
						    </div>

						    <div class="col-lg-5">
						      <label for="inputData" class="control-label"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> Prazo</label>
						        <input type="date" class="form-control" id="inputData" placeholder="Data">
						    </div>

						    <div class="col-lg-12">
						      <label for="textArea" class="control-label"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> Comentário</label>
						      <textarea class="form-control" rows="3" id="textArea"></textarea>
						      <span class="help-block">Adicione um comentário de até 250 caracteres.</span>
						    </div>

						    <div class="col-lg-12">
						      <button type="button" class="btn btn-default btn-sm pull-left" data-dismiss="modal">cancelar</button>
						      <button type="submit" class="btn btn-primary btn-sm">enviar</button>
						    </div>

						</div>
					</form>
				</div>
			</div>

	      </div>
	    </div>

	  </div>
	</div>

	<!-- Modal IMG -->
	<div id="avaModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	      	Avaliar
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	      </div>
	      <div class="modal-body">
	      	<div class="row text-center">
	      	  <p>Clique em uma estrela para avaliar de 1 a 5.</p>
	          <input type="hidden" id="ratingModal" class="rating"/>
	        </div>

	        <div class="row">
	          <div class="col-lg-12">
				<label for="textArea" class="control-label"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> Comentário</label>
				<textarea class="form-control" rows="3" id="textArea"></textarea>
				<span class="help-block">Adicione um comentário de até 250 caracteres.</span>
			  </div>
			  
			  <div class="col-lg-12">
			    <button type="button" class="btn btn-default btn-sm pull-left" data-dismiss="modal">cancelar</button>
			    <button type="submit" class="btn btn-primary btn-sm">enviar</button>
			  </div>
	        </div>
			
	      </div>
	    </div>

	  </div>
	</div>