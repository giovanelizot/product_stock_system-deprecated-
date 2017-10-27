<?php
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
	error_reporting(E_ALL);

	include('../layout/head.php');
	include('../layout/header.php');

	require('../../controllers/PedidosController.php');
	$pedidos = new PedidosController;
	$pedidos_list = $pedidos->show();
	$produtos = $pedidos->produtos();

?>

<div class="content-wrapper">
	<section class="content-header">
		<h1>
			<i class="fa fa-fw fa-shopping-bag"></i>Pedidos
		</h1>
		<ol class="breadcrumb">
			<li><a href="../../../index.php"><i class="fa fa-dashboard"></i> Início</a></li>
			<li class="active">Todos os Pedidos</li>
		</ol>
	</section>
	<section class="content">
		<div class="box">
			<div class="box-header with-border">
			<h3 class="box-title">Pedidos</h3>

			<div class="box-tools pull-right">
				<a href="../pedidos/form.php" class="btn btn-default btn-xs"> <i class="fa fa-fw fa-plus"></i> Novo</a>
			</div>
			</div>
			<div class="box-body">
				<table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>id</th>
							<th>Fornecedor</th>
							<th>Data</th>
							<th>Valor Total</th>
							<th>Situação</th>
							<?php if ($value['situacao'] != 4): ?>
								<th>Produtos</th>
							<?php endif; ?>
							<th>Ações</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($pedidos_list['data'] as $row => $value): ?>
							<tr>
								<td>
									<?php echo $value['id']; ?>
								</td>
								<td>
									<?php echo $pedidos->fornecedores($value['id'])[0]['nome']; ?>
								</td>
								<td>
									<?php echo date('d/m/Y h:m:i', strtotime($value['data'])); ?>
								</td>
								<td>
									<?php echo $value['valor_total']; ?>
								</td>
								<td>
									<?php echo $value['situacao']; ?>
								</td>
								<?php if ($value['situacao'] != 4): ?>
									<td>
										<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
											<i class="fa fa-fw fa-pencil"></i>Adicionar Produtos
										</button>
									</td>
								<?php endif; ?>
								<td>
									<a href="./form.php?id=<?php echo $value['id']; ?>" class="btn btn-primary btn-xs"><i class="fa fa-fw fa-pencil"></i> Editar</a>
									<a href="./form.php?id=<?php echo $value['id']; ?>" class="btn btn-danger btn-xs"><i class="fa fa-fw fa-trash"></i> Excluir</a>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</section>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Modal title</h4>
			</div>
			<form class="" action="index.html" method="post">
				<div class="modal-body">
					<div class="form-group">
						<label for="marca">Produtos:</label>
						<select class="form-control" name="produto">
							<?php foreach ($produtos as $row => $value): ?>
								<option value="<?php echo $value['id']; ?>" ><?php echo $value['nome']; ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="form-group">
						<label for="quantidade">Quatidade:</label>
						<input name="quantidade" type="text" class="form-control" id="quantidade" placeholder="Quantidade">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
					<button type="button" class="btn btn-primary">Cadastrar</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php
	include('../layout/footer.php');
	include('../layout/foot.php');
?>
