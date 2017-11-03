<?php
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
	error_reporting(E_ALL);



	require('src/controllers/PedidosController.php');
	require('src/Helpers/functions.php');
	$pedidos = new PedidosController;
	$pedidos_list = $pedidos->show();
	$produtos = $pedidos->produtos();

	if (count($_POST) > 0) {
		if ($_POST['situacao']) {
			$situacao = new Functions;
			$pedidos->alteraSituacao($_POST['pedido'], $_POST['situacao']);
			$pedidos_list = $pedidos->show();
		} else {
			$pedidos->adicionaProdutos($_POST);
		}
	}
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
				<a href="http://localhost/project/conteudo.php?m=pedidos&a=cadastrar" class="btn btn-default btn-xs"> <i class="fa fa-fw fa-plus"></i> Novo</a>
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
							<th>Produtos</th>
							<th>Pedido</th>
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
									<span class="label label-warning">
										<?php
											switch ($value['situacao']) {
												case 1:

													echo "<i class=\"fa fa-fw fa-clock-o\"></i> Pendente";
													break;
												case 2:
													echo "<i class=\"fa fa-fw fa-check-circle-o\"></i> Aprovado";
													break;
												case 3:
													echo "<i class=\"fa fa-fw fa-truck\"></i> À Caminho";
												break;
												case 4:
													echo "<i class=\"fa fa-fw fa-list\"></i> Em Revisão";
													break;
												case 5:
													echo "<i class=\"fa fa-fw fa-truck\"></i> Retornado ao Fornecedor";
													break;
												case 6:
													echo "<i class=\"fa fa-fw fa-check\"></i> Finalizada";
													break;
												default:
													echo "Situação Desconhecida";
													break;
											}
										 ?>
								 	</span>
									<br>
									<br>
									<button type="button" class="btn btn-primary btn-xs open-modal-situacao" data-toggle="modal" data-id="<?php echo $value['id']; ?>">
										<span class="fa fa-edit fa-fw"></span>	Alterar
									</button>
								</td>
								<td>
									<button type="button" class="btn btn-primary btn-xs open-modal" data-toggle="modal" data-id="<?php echo $value['id']; ?>">
										<i class="fa fa-fw fa-pencil"></i>Adicionar Produtos
									</button>
								</td>
								<td>
									<?php $prod = new Functions; ?>
									<?php if ($prod->CheckProduct($value['id'])): ?>
										<ul>
											<?php foreach ($prod->CheckProduct($value['id']) as $row2 => $value2): ?>
												<li><?php echo $value2['nome'].' => '.$value2['qtd'] ?></li>
											<?php endforeach; ?>
										</ul>
									<?php else: ?>
										Sem produtos cadastrados
									<?php endif; ?>
								</td>
								<td>
									<a href="conteudo.php?m=pedidos&a=editar&id=<?php echo $value['id']; ?>" class="btn btn-primary btn-xs"><i class="fa fa-fw fa-pencil"></i> Editar</a>
									<a href="conteudo.php?m=pedidos&a=editar&id=<?php echo $value['id']; ?>" class="btn btn-danger btn-xs"><i class="fa fa-fw fa-trash"></i> Excluir</a>
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
				<h4 class="modal-title" id="myModalLabel">Adicionar produto ao Pedido</h4></h4></h4>
			</div>
			<form class="" action="" method="post" >
				<div class="modal-body">
					<div class="form-group">
						<label for="prod">Produtos:</label>
						<select class="form-control" name="prod" id="prod">
							<?php foreach ($produtos as $row => $value): ?>
								<option value="<?php echo $value['id']; ?>" ><?php echo $value['nome']; ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="form-group">
						<label for="quantidade">Quatidade:</label>
						<input name="quantidade" type="text" class="form-control" id="quantidade" placeholder="Quantidade">
					</div>
					 <input type="hidden" name="pedido" id="pedido" value=""/>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
					<button type="submit" class="btn btn-primary">Cadastrar</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Alteração de Situação</h4>
			</div>
			<form class="" action="" method="post" name="situacao-form">
				<div class="modal-body">
					<div class="form-group">
						<label for="situacao">Situação:</label>
						<select class="form-control" name="situacao" id="situacao">
								<option value="1" ><i class="fa fa-fw fa-clock-o"></i> Pendente</option>
								<option value="2" ><i class="fa fa-fw fa-check-circle-o"></i> Aprovado</option>
								<option value="3" ><i class="fa fa-fw fa-truck"></i> À caminho</option>
								<option value="4" ><i class="fa fa-fw fa-list"></i> Em Revisão</option>
								<option value="5" ><i class="fa fa-fw fa-truck"></i> Retornado ao Fornecedor</option>
								<option value="6" ><i class="fa fa-fw fa-check"></i> Finalizada</option>
						</select>
					</div>
					<input type="hidden" name="pedido" id="pedido-situacao" value=""/>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
					<button type="submit" class="btn btn-primary">Alterar</button>
				</div>
			</form>
		</div>
	</div>
</div>
