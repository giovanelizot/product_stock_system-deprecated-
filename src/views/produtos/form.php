<?php
	include('../layout/head.php');
	include('../layout/header.php');
?>

<div class="content-wrapper">
	<section class="content-header">
		<h1>
			<i class="fa fa-fw fa-cart-plus"></i> Cadastro de Produtos
		</h1>
		<ol class="breadcrumb">
			<li><a href="/"><i class="fa fa-dashboard"></i> Início</a></li>
			<li><a href="../produtos/show.php"> Produtos</a></li>
			<li class="active">Cadastrar Produto</li>
		</ol>
	</section>
	<section class="content">
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Produtos</h3>
				<div class="box-tools pull-right">
					<a href="../produtos/show.php" class="btn btn-default btn-xs"> <i class="fa fa-fw fa-undo"></i> Voltar</a>
				</div>
			</div>
			<div class="box-body">
				<form method="post" action="">
					<div class="form-group">
						<label for="nome">Produto:</label>
						<input type="text" class="form-control" id="nome" placeholder="Nome do produto">
					</div>
					<div class="form-group">
						<label for="marca">Marca:</label>
						<select class="form-control" name="marca">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
				</form>
			</div>
		</div>
	</section>
</div>
<?php
	include('../layout/footer.php');
	include('../layout/foot.php');
?>
