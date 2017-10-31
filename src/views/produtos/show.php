<?php
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
	error_reporting(E_ALL);

	require('src/controllers/ProdutosController.php');
	$produtos = new ProdutosController;
	$produtos_list = $produtos->show();

?>

<div class="content-wrapper">
	<section class="content-header">
		<h1>
			<i class="fa fa-fw fa-cart-plus"></i>Todos os Produtos
		</h1>
		<ol class="breadcrumb">
			<li><a href="index.php"><i class="fa fa-dashboard"></i> Início</a></li>
			<li class="active">Todos os Produto</li>
		</ol>
	</section>
	<section class="content">
		<div class="box">
			<div class="box-header with-border">
			<h3 class="box-title">Produtos</h3>

			<div class="box-tools pull-right">
				<a href="conteudo.php?m=produtos&a=cadastrar" class="btn btn-default btn-xs"> <i class="fa fa-fw fa-plus"></i>Novo</a>
			</div>
			</div>
			<div class="box-body">
				<table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>Produto</th>
							<th>Marca</th>
							<th>Quantidade</th>
							<th>R$ Total no produto</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($produtos_list['data'] as $row => $value): ?>
							<tr>
								<td><?php echo $value['nome']; ?></td>
								<td><?php echo $value['marca']; ?></td>
								<td><?php echo $value['qtd']; ?></td>
								<td><?php echo 'R$ '.$value['preco']; ?></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</section>
</div>
