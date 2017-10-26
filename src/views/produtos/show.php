<?php
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
	error_reporting(E_ALL);

	include('../layout/head.php');
	include('../layout/header.php');

	require('../../controllers/ProdutosController.php');
	$produtos = new ProdutosController;
	$produtos_list = $produtos->show()['data'];

?>

<div class="content-wrapper">
	<section class="content-header">
		<h1>
			<i class="fa fa-fw fa-cart-plus"></i>Todos os Produtos
		</h1>
		<ol class="breadcrumb">
			<li><a href="../../../index.php"><i class="fa fa-dashboard"></i> Início</a></li>
			<li class="active">Todos os Produto</li>
		</ol>
	</section>
	<section class="content">
		<div class="box">
			<div class="box-header with-border">
			<h3 class="box-title">Produtos</h3>

			<div class="box-tools pull-right">
				<a href="../produtos/form.php" class="btn btn-default btn-xs"> <i class="fa fa-fw fa-plus"></i> Novo</a>
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
						<?php foreach ($produtos_list as $row): ?>
							<tr>
								<td><?php echo $row->nome; ?></td>
								<td><?php $row->marca; ?></td>
								<td><?php $row->quantidade; ?></td>
								<td><?php 'R$ '.$row->preco; ?></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</section>
</div>
<?php
	include('../layout/footer.php');
	include('../layout/foot.php');
?>
