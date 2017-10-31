<?php
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
	error_reporting(E_ALL);



	require('src/controllers/MarcasController.php');
	$produtos = new MarcasController;
	$produtos_list = $produtos->show();

?>

<div class="content-wrapper">
	<section class="content-header">
		<h1>
			<i class="fa fa-fw fa-star"></i>Marcas de Produtos
		</h1>
		<ol class="breadcrumb">
			<li><a href="index.php"><i class="fa fa-dashboard"></i> Início</a></li>
			<li class="active">Todas as Marcas</li>
		</ol>
	</section>
	<section class="content">
		<div class="box">
			<div class="box-header with-border">
			<h3 class="box-title">Marcas</h3>

			<div class="box-tools pull-right">
				<a href="conteudo.php?m=marcas&a=cadastrar" class="btn btn-default btn-xs"> <i class="fa fa-fw fa-plus"></i> Novo</a>
			</div>
			</div>
			<div class="box-body">
				<table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>Marca</th>
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
									<a href="conteudo.php?m=marcas&a=editar&id=<?php echo $value['id']; ?>" class="btn btn-primary btn-xs"><i class="fa fa-fw fa-pencil"></i> Editar</a>
									<a href="conteudo.php?m=marcas&a=excluir&id=<?php echo $value['id']; ?>" class="btn btn-danger btn-xs"><i class="fa fa-fw fa-trash"></i> Excluir</a>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</section>
</div>

