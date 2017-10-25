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
        <h3 class="box-title">Pedidos</h3>

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
   <form  method="post" action="" >
      <fieldset>
        <legend><strong> Cadastro de Pedidos</strong></legend>
        <!--
        <label for="id">Identificação</label>
        <br>
        <i class="fa fa-id-card" aria-hidden="true"></i>
        <input type="number" name="id" step="1" size="40" maxlength="75" value="">
        <br>
        <br>
        <-->
        <label for="preco">Valor Total</label>
        <br>
        <i class="fa fa-usd" aria-hidden="true"></i>  &nbsp; 
        <input type="number" name="valor_total" step="0.01" size="40" maxlength="75" value="">
        <br>
        <br>
        <!-- select -->
        <div class="form-group">
          <label for="situcao">Situação</label>
          <br>&nbsp; &nbsp; &nbsp; 
          <select >
            <option>Aprovado</option>
            <option>Retido</option>
            <option>Em Espera</option>
        </select>
    </div>
    <label for="Data">Data</label>
    <br>
    <i class="fa fa-calendar"></i>
    <input type="Data" size="40" maxlength="75" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
    <br>
    <br>
    <label for="Data">Data de Finalização</label>
    <br>
    <i class="fa fa-calendar"></i>
    <input type="Data" size="40" maxlength="75" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
    <br>
    <br>
    <label for="marca">Empresa</label>
    <br>
    <i class="fa fa-square" aria-hidden="true"></i>
    <input type="text" name="empresa" size="40" maxlength="75" value="">
    <br>
    <br>
    <label for="preco">Fornecedor</label>
    <br>
    <i class="fa fa-truck"></i>
    <input type="id" name="fornecedor"  size="40" maxlength="75" value="">
    <br>
    <br>
    <label for="marca">Descrição</label>
    <br>&nbsp; &nbsp; &nbsp; 
    <textarea for="id" name="descricao" ></textarea>
    <br>
    <br>
    <button type="submit" value="Enviar" class="btn btn-info">
     Enviar
 </button>  
 <button type="reset" value="Limpar Dados" class="btn btn-info">
     Limpar
 </button>



</fieldset>
</form>
<!-- /.box-body -->
<div class="box-footer">

</div>  
<!-- /.box-footer-->

</div>
<!-- /.box -->

</div>
<!-- Main content -->
<section class="content">
    <div class="row">
      <div class="col-md-15">
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Lista de Pedidos
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
      <div class="box-body pad">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                  <strong>Editar Pedido</strong><br> 
                  <input type="text" name="id" size="40" maxlength="75" value="">
                  <button type="submit" value="Enviar" class="btn btn-info">
                     Editar
                 </button><br><br> 
                 <strong>Deletar Pedido</strong><br> 
                 <input type="text" name="id" size="40" maxlength="75" value="">
                 <button type="submit" value="Enviar" size="40" maxlength="75" class="btn btn-danger">
                     Deletar
                 </button>  
                 <div class="box-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                    </div>
                </div>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
            <!-- Cria a tabela com os produtos -->
            <table class="table table-bordered" >
                <tr class="bg-success">
                  <th>Identificação</th>
                  <th>Data</th>           
                  <th>Data de Finalização</th>
                  <th>Valor Total</th>
                  <th>Situação</th>
                  <th>Empresa</th>
                  <th>Fornecedor</th>
                  <th>Descrição</th>
              </tr>
              <tr class="info">
                  <td>id</td>  
                  <td><span>23/10/2017</span></td>
                  <td><span>24/10/2017</span></td>   
                  <td>R$ 2.800,90</td>
                  <td><span class="label label-success">Aprovado</span></td>
                  <td>Vencal</td>
                  <td><span>OLIMPIKUS</span></td>
                  <td>Distribuidora de Calçados</td>
              </tr>
              <tr class="info">
                  <td>id</td>  
                  <td><span>23/10/2017</span></td>
                  <td><span>24/10/2017</span></td>   
                  <td>R$ 2.800,90</td>
                  <td><span class="label label-success">Aprovado</span></td>
                  <td>Vencal</td>
                  <td><span>OLIMPIKUS</span></td>
                  <td>Distribuidora de Calçados</td>
              </tr>
              <tr class="info">
                 <td>id</td>  
                 <td><span>23/10/2017</span></td>
                 <td><span>24/10/2017</span></td>   
                 <td>R$ 2.800,90</td>
                 <td><span class="label label-success">Aprovado</span></td>
                 <td>Vencal</td>
                 <td><span>OLIMPIKUS</span></td>
                 <td>Distribuidora de Calçados</td>
             </tr>
             <tr class="info">
                 <td>id</td>  
                 <td><span>23/10/2017</span></td>
                 <td><span>24/10/2017</span></td>   
                 <td>R$ 2.800,90</td>
                 <td><span class="label label-success">Aprovado</span></td>
                 <td>Vencal</td>
                 <td><span>OLIMPIKUS</span></td>
                 <td>Distribuidora de Calçados</td>
             </tr>
         </table>

         <div class="box-body table-responsive no-padding">
          <div class="panel-heading">
            <h3 class="btn-success"> Relatórios</h3>
        </div>
        <div class="panel-body">
            <a href="#" class="btn btn-success">Semanal</a>
            <a href="#" class="btn btn-success">Mensal</a>
            <a href="#" class="btn btn-success">Anual</a>
        </div>
    </div>
    <!-- Content -->
    <div class="col-md-10" id="content">
        <!-- Produtos -->
        <div class="row box-dash">
          <h3>Relatórios</h3>
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
