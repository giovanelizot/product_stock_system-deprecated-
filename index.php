<?php 
include('src/views/layout/head.php');
include('src/views/layout/header.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Dashboard
			<small>Control panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Dashboard</li>
		</ol>
	</section>
	<section id="BANNER BEM-VINDO" data-spy="scroll" data-target="#scrollspy-components">
		<h2 class="page-header"><a href=""></a>
		</h2>
		<div class="panel page-header callout callout-info lead text-center">
			<h1>ESTOQUE
				<div class="container" align="left"  style="height: 0.9em; width: 0.9em; float: left " style="position:absolute;">
					<i class="fa fa-shopping-bag fa-2x"></i>
				</div></h1>
				<!-- BEGIN SECTION BANNER -->

				<section class="masthead">
					<div class="panel-default">
						<div class="row">
							<div class="intro-text">
								<div class="intro-lead-in">
									<h2 class="title-banner">
										BEM-VINDO AO SISTEMA DE CONTROLE DE ESTOQUE!
									</h2>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</section>
		<!-- END SECTION BANNER -->


		<!-- Main content -->
		<section class="content">
			<!-- Small boxes (Stat box) -->
			<div class="panel-default">
				<div class="row">
					<div class="panel-default">
						<div class="col-lg-3 col-xs-6 text-center ">
							<!-- small box -->
							<div class="small-box bg-aqua">
								<div class="inner">
									<p class="text-muted lead text-center" ><h3>Produtos</h3>
										<h4>O sistema tem como objetivo auxiliar no controle de estoque de empresas, para administração dos serviços como o geranciamento de produtos, cadastros, listagem  remoção e atualização.</h4>
									</p>
								</div>
							</div>
						</div>
					</div>
					<!-- ./col -->
					<div class="col-lg-3 col-xs-6 text-center">
						<!-- small box -->
						<div class="panel-default">
							<div class="small-box bg-green">
								<div class="inner">
									<p class="text-muted lead text-center" ><h3>Marcas</h3>
										<h4> Para a implementação temos um Gerenciamento de Marcas de Produtos, tendo assim os cadastros, listagem, remoção e atualização, podendo uma marca ser associada  para  algum  determinado Produto.</h4>
									</p>
								</div>
							</div>
						</div>
					</div>
					<!-- ./col -->
					<div class="col-lg-3 col-xs-6 text-center">
						<!-- small box -->
						<div class="panel-default">
							<div class="small-box bg-yellow">
								<div class="inner">
									<p class="text-muted lead text-center"><h3>Pedidos</h3>
										<h4> Oferece o serviço de Cadastro de Pedidos, além de possuir uma situação, o Pedido pode ser aprovado, pendente, em avaliação ou outra situação que eventualmente poderá se encontrar.</h4>
									</p>
								</div>
							</div>
						</div>
					</div>
					<!-- ./col -->
					<div class="col-lg-3 col-xs-6 text-center">
						<!-- small box -->
						<div class="panel-default">
							<div class="small-box bg-red">
								<div class="inner">
									<p class="text-muted lead text-center"><h3>Fornecedores</h3>
										<h4>Possui a funcionalidade de Cadastro de Fornecedores podendo ser cadastrados listados, removidos e atualizados, além de ser vinculado ao Pedido de determinada empresa.</h4>
									</p>
								</div>
							</div>
						</div>
					</div>
					<!-- ./col -->
				</div>
			</div>
		</section>
		<!-- /.content -->
	</div>
	<?php 
	include('src/views/layout/footer.php');
	include('src/views/layout/foot.php');
	?>  
