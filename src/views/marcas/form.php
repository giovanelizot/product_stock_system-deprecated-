<?php
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
	error_reporting(E_ALL);


	require('src/controllers/MarcasController.php');
	$marcas = new MarcasController;
	if(count($_POST) > 0) {
		if (isset($_GET['id'])) {
			$marcas_list = $marcas->update($_GET['id'], $_POST);
		} else {
			$marcas_list = $marcas->store($_POST);
		}
	}

	if (isset($_GET['id'])) {
		$data = $marcas->edit($_GET['id'])['data'];
	}
?>

<div class="content-wrapper">
	<section class="content-header">
		<h1>
			<i class="fa fa-fw fa-cart-plus"></i> Cadastro de Marcas
		</h1>
		<ol class="breadcrumb">
			<li><a href="/"><i class="fa fa-dashboard"></i> Início</a></li>
			<li><a href="conteudo.php?m=marcas&a=listar"> Marcas</a></li>
			<li class="active">Cadastrar Marca</li>
		</ol>
	</section>
	<section class="content">
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Marcas</h3>
				<div class="box-tools pull-right">
					<a href="conteudo.php?m=marcas&a=listar" class="btn btn-default btn-xs"> <i class="fa fa-fw fa-undo"></i> Voltar</a>
				</div>
			</div>
			<div class="box-body">
				<form method="post" action="">
					<div class="form-group">
						<label for="nome">Marcas:</label>
						<input name="nome" type="text" class="form-control" id="nome" placeholder="Nome do produto" value="<?php echo (isset($data) ? $data[0]['nome'] : false) ?>">
					</div>
					<input type="submit" value="Cadastrar" class="btn btn-sm btn-primary">
				</form>
			</div>
		</div>
	</section>
</div>
