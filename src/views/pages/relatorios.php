<?php 
include('../layout/head.php');
include('../layout/header.php');
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
      <li><a href="../../../index.php"><i class="fa fa-dashboard"></i> Home</a></li>
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
                <h3 class="box-title">
                </h3>
                <!-- tools box -->
                <div class="pull-right box-tools">
                  <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                  title="Collapse">
                  <i class="fa fa-minus"></i></button>
                  <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                  title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
          </div>
          <!-- /.box-header -->
          <!-- /.box-header -->
          <div class="box-body table-responsive no-padding">
              <div class="panel-heading">
              </div>
              <div class="panel-body">
                <a href="semanal.php" class="btn btn-success">Semanal</a>
                <a href="mensal.php" class="btn btn-success">Mensal</a>
                <a href="anual.php" class="btn btn-success">Anual</a>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">

            </div>  
            <!-- /.box-footer-->

        </div>
        <!-- /.box -->

    </div>
    <!-- Main content -->

    
</div>
<!-- Content -->

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
include('../layout/footer.php');
include('../layout/foot.php');
?> 
