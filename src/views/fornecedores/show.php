	<?php
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
	error_reporting(E_ALL);


	require('src/controllers/FornecedoresController.php');
	$produtos = new FornecedoresController;
	$produtos_list = $produtos->show();

?>

<div class="content-wrapper">
	<section class="content-header">
		<h1>
			<i class="fa fa-fw fa-truck"></i>Fornecedores
		</h1>
		<ol class="breadcrumb">
			<li><a href="index.php"><i class="fa fa-dashboard"></i> Início</a></li>
			<li class="active">Todos os Fornecedores</li>
		</ol>
	</section>
	<section class="content">
		<div class="box">
			<div class="box-header with-border">
			<h3 class="box-title">Fornecedores</h3>

			<div class="box-tools pull-right">
				<a href="conteudo.php?m=fornecedores&a=cadastrar" class="btn btn-default btn-xs"> <i class="fa fa-fw fa-plus"></i> Novo</a>
			</div>
			</div>
			<div class="box-body">
				<table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>Nome</th>
							<th>Cidade</th>
							<th>E-mail</th>
							<th>Telefone</th>
							<th>Operações</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($produtos_list['data'] as $row => $value): ?>
							<tr>
								<td>
									<?php echo $value['nome']; ?>
								</td>
								<td>
									<?php echo $value['cidade'].' / '.$value['estado']; ?>
								</td>
								<td>
									<?php echo $value['email']; ?>
								</td>
								<td>
									<?php echo $value['telefone']; ?>
								</td>
								<td>
									<a href="conteudo.php?m=fornecedores&a=editar&id=<?php echo $value['id']; ?>" class="btn btn-primary btn-xs"><i class="fa fa-fw fa-pencil"></i> Editar</a>
									<a href="conteudo.php?m=fornecedores&a=excluir&id=<?= $value['id']; ?>" class="btn btn-danger btn-xs"><i class="fa fa-fw fa-trash"></i> Excluir</a>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</section>
</div>