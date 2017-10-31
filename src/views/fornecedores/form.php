<?php
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
	error_reporting(E_ALL);

	require('src/controllers/FornecedoresController.php');
	$fornecedores = new FornecedoresController;
	if(count($_POST) > 0) {
		if (isset($_GET['id'])) {
			$fornecedores_list = $fornecedores->update($_GET['id'], $_POST);
		} else {
			$fornecedores_list = $fornecedores->store($_POST);
		}
		
	}

	if (isset($_GET['id'])) {
		$data = $fornecedores->edit($_GET['id'])['data'];
	}
?>

<div class="content-wrapper">
	<section class="content-header">
		<h1>
			<i class="fa fa-fw fa-truck"></i> Cadastro de Fornecedores
		</h1>
		<ol class="breadcrumb">
			<li><a href="/"><i class="fa fa-dashboard"></i> Início</a></li>
			<li><a href="conteudo.php?m=fornecedores&a=listar"> Fornecedores</a></li>
			<li class="active">Cadastrar Fornecedor</li>
		</ol>
	</section>
	<section class="content">
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Fornecedores</h3>
				<div class="box-tools pull-right">
					<a href="conteudo.php?m=fornecedores&a=listar" class="btn btn-default btn-xs"> <i class="fa fa-fw fa-undo"></i> Voltar</a>
				</div>
			</div>
			<div class="box-body">
				<form method="post" action="">
					<div class="form-group">
						<label for="nome">Nome:</label>
						<input name="nome" type="text" class="form-control" id="nome" placeholder="Nome completo" value="<?php echo (isset($data) ? $data[0]['nome'] : false) ?>">
					</div>
					<div class="form-group">
						<label for="cidade">Cidade:</label>
						<input name="cidade" type="text" class="form-control" id="cidade" placeholder="Cidade" value="<?php echo (isset($data) ? $data[0]['cidade'] : false) ?>">
					</div>
					<div class="form-group">
						<label for="estado">Estado:</label>
						<input name="estado" type="text" class="form-control" id="estado" placeholder="Estado" value="<?php echo (isset($data) ? $data[0]['estado'] : false) ?>">
					</div>
					<div class="form-group">
						<label for="telefone">Telefone:</label>
						<input name="telefone" type="text" class="form-control" id="telefone" placeholder="Telefone" value="<?php echo (isset($data) ? $data[0]['telefone'] : false) ?>">
					</div>
					<div class="form-group">
						<label for="email">Email:</label>
						<input name="email" type="text" class="form-control" id="email" placeholder="email" value="<?php echo (isset($data) ? $data[0]['email'] : false) ?>">
					</div>
					<input type="submit"  value="Cadastrar" class="btn btn-sm btn-primary">
				</form>
			</div>
		</div>
	</section>
</div>

