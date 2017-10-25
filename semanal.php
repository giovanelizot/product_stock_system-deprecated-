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
      <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Relatórios</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
          title="Collapse">
          <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
    </div>
    <div class="box-body">

      <?php 
      if (isset($_POST['valor_total'])) {
       var_dump($_POST);
       echo "\n\n";
       echo $_POST['valor_total'];
       echo "Testando Envio dos Dados";
   }

   ?>
   <section class="content">
    <div class="row">
      <div class="col-md-15">
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Relatórios Semanal
            </h3>
           <div class="panel-body">
        <a href="semanal.php" class="btn btn-primary">Novo</a>
        </div>
      </div>
      <!-- /.box-header -->
        <!-- /.box-header -->
         <div class="box-body table-responsive no-padding">
          <div class="panel-heading">
        </div>
        <div class="col-md-10" id="content">
        <!-- Produtos -->
        <div class="row box-dash">
          <table id="list-products" class="table table-stripped table-bordered">
            <thead>
              <tr class="btn-info" >
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Fornecedor</th>
                <th width="10%">Ações</th>
            </tr>
        </thead>
        <tbody>
          <tr class="info">
            <td>1</td>
            <td>Farinha de milho</td>
            <td>R$100</td>
            <td>100</td>
            <td>Farinhas do nordeste</td>
            <td>
              <a href="#" class="btn btn-block btn-success">Entrada</a>
              <a href="#" class="btn btn-block btn-primary">Editar</a>
              <a href="#" class="btn btn-block btn-danger">Deletar</a>
          </td>
      </tr>
  </tbody>
</table>
</div><!-- Produtos -->
    </div>
    <!-- Content -->
<!-- /.box-body -->
<div class="box-footer">

</div>  
<!-- /.box-footer-->

</div>
<!-- /.box -->

</div>
<!-- Main content -->

         

</div>
<!-- /.box-body -->
</div>
<!-- /.box -->
</div>
</div>
</section>
<!-- /.content -->
</div>
</div>
</div>
</section>
<!-- /.content -->


</div>
<!-- /.content-wrapper -->

<?php 
include('src/views/layout/footer.php');
include('src/views/layout/foot.php');
?> 
