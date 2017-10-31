<?php
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
	error_reporting(E_ALL);

	

	require('src/controllers/ProdutosController.php');
	$produtos = new ProdutosController;
	if(count($_POST) > 0) {
		if (isset($_GET['id'])) {
			$produtos_list = $produtos->update($_GET['id'], $_POST);
		} else {
			$produtos_list = $produtos->store($_POST);
		}
	}

	if (isset($_GET['id'])) {
		$data = $produtos->edit($_GET['id'])['data'];
	}
	$marcas = $produtos->marcas()['data'];
?>

<div class="content-wrapper">
	<section class="content-header">
		<h1>
			<i class="fa fa-fw fa-cart-plus"></i> Cadastro de Produtos
		</h1>
		<ol class="breadcrumb">
			<li><a href="/"><i class="fa fa-dashboard"></i> Início</a></li>
			<li><a href="conteudo.php?m=produtos&a=listar"> Produtos</a></li>
			<li class="active">Cadastrar Produto</li>
		</ol>
	</section>
	<section class="content">
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Produtos</h3>
				<div class="box-tools pull-right">
					<a href="conteudo.php?m=produtos&a=listar" class="btn btn-default btn-xs"> <i class="fa fa-fw fa-undo"></i> Voltar</a>
				</div>
			</div>
			<div class="box-body">
				<form method="post" action="">
					<div class="form-group">
						<label for="nome">Produto:</label>
						<input name="nome" type="text" class="form-control" id="nome" placeholder="Nome do produto" value="<?php echo (isset($data) ? $data[0]['nome'] : false) ?>">
					</div>
					<div class="form-group">
						<label for="marca">Marca:</label>
						<select class="form-control" name="marca">
							<?php foreach ($marcas as $row => $value): ?>
								<option value="<?php echo $value['id']; ?>" <?php echo ($data[0]['marcas_id'] ==  $value['id'] ? selected : false) ?>><?php echo $value['nome']; ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<input type="submit" name="" value="Cadastrar" class="btn btn-sm btn-primary">
				</form>
			</div>
		</div>
	</section>
</div>

