<?
$pg = -1;
if(isset($_GET['pg'])){
	$pg = $_GET['pg'];
}
?>
<header>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <span class="navbar-brand">MF Ocorrências</span>
	    </div>

	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li <? if(isset($pg) && $pg==0){ ?>class="active"<? } ?>><a href="index.php"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Lista</a></li>
	      </ul>

	      <div class="navbar-form navbar-left">
	        <a href="new.php" class="btn btn-default"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> nova ocorrência</a>
	      </div>

	      <ul class="nav navbar-nav navbar-left">
	        <li><a href="login.php"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> sair</a></li>
	      </ul>
	    </div>

	  </div>
	</nav>
</header>