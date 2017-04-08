<?
$pg = -1;
if(isset($_GET['pg'])){
	$pg = $_GET['pg'];
}
?>
<header>
	<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <span class="navbar-brand">RMF Ocorrências</span>
	    </div>

	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li <? if(isset($pg) && $pg==0){ ?>class="active"<? } ?>><a href="index.php?ocr=all"><span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span> Todas</a></li>
	        <li <? if(isset($pg) && $pg==1){ ?>class="active"<? } ?>><a href="index.php?ocr=my"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Minhas</a></li>
	        <li <? if(isset($pg) && $pg==2){ ?>class="active"<? } ?>><a href="index.php?ocr=my&stt=2"><span class="glyphicon glyphicon-fire" aria-hidden="true"></span> Avaliar <span class="label label-danger">99</span></a></li>
	      </ul>

	      <div class="navbar-form navbar-left">
	        <a href="javascript:;" class="btn btn-default showNov" data-toggle="modal" data-target="#novModal"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> nova</a>
	      </div>

	      <ul class="nav navbar-nav navbar-right">	       	
	       	<li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
	          	<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
	          	<span class="caret"></span>
	          </a>
	          <ul class="dropdown-menu" role="menu">
	            <li><a href="javascript:;">Síndico</a></li>
	            <li><a href="javascript:;">Nome Sobrenome</a></li>
	            <li><a href="javascript:;">contato@email.com.br</a></li>
	          </ul>
	        </li>

	        <li><a href="login.php"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> sair</a></li>
	      </ul>
	    </div>

	  </div>
	</nav>
</header>