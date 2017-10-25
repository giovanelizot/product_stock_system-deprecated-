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
        <h3 class="box-title">Unidades</h3>

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
      if (isset($_POST['nome'])) {
       var_dump($_POST);
       echo "\n\n";
       echo $_POST['email'];
       echo "Testando Envio dos Dados";
   }

   ?>



   <form method="post" action="" >
      <fieldset>
        <legend><strong> Cadastro Unidades</strong></legend>
        <label for="nome">Nome</label>
        <br>
        <input type="text" name="nome" size="40" maxlength="75" value="">
        <br>
        <br>
        <label for="E-mail">E-mail</label>
        <br>
        <input type="text" name="email" size="40" maxlength="75" value="">
        <br>
        <br>
        <i class="fa fa-phone"></i>
        <label for="telefone">Telefone:</label>
        <br>   
        <input  type="Telefone" name="telefone" size="40" maxlength="75" data-inputmask='"mask": "(99) 9999-9999"' data-mask>
        <br>
        <br>
        <label for="marca">Endereço</label>
        <br>
        <input type="text" name="endereco" size="40" maxlength="75" value="">
        <br>
        <br>
        <label for="Cidade">Cidade</label>
        <br>
        <input type="text" name="cidade" size="40" maxlength="75" value="">
        <br>
        <br>
        <!-- select -->
        <div class="form-group">
          <label for="situcao">Ativa</label>
          <br>
          <select >
            <option>Sim</option>
            <option>Não</option>
        </select>
    </div>
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
            <h3 class="box-title">Listar Unidades
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
               <strong>Editar Unidade</strong><br> 
               <input type="number" name="id" size="40" maxlength="75" value="">
               <button type="submit" value="Enviar" class="btn btn-info">
                 Editar
             </button><br><br> 
             <strong>Deletar Unidade</strong><br> 
             <input type="number" name="id" size="40" maxlength="75" value="">
             <button type="submit" value="Enviar" class="btn btn-danger">
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
          <tr class="bg-primary">
            <th>Nome</th>
            <th>E-mail</th>
            <th>Ativo</th>
            <th>Telefone</th>
            <th>Endereço</th>
            <th>Cidade</th>
        </tr>
        <tr class="info">
            <td>Usuário</td>
            <td><span>usuario@usuario.com</span></td>
            <td><span>Sim</span></td>
            <td>(55)99113-4959</td>
            <td>Rua do Comércio nª999</td>
            <td>Ijuí</td>
        </tr>
        <tr class="info">
         <td>Usuário</td>
         <td><span>usuario@usuario.com</span></td>
         <td><span>Sim</span></td>
         <td>(55)99113-4959</td>
         <td>Rua do Comércio nª999</td>
         <td>Ijuí</td>
     </tr>
     <tr class="info">
        <td>Usuário</td>
        <td><span>usuario@usuario.com</span></td>
        <td><span>Sim</span></td>
        <td>(55)99113-4959</td>
        <td>Rua do Comércio nª999</td>
        <td>Ijuí</td>
    </tr>
    <tr class="info">
     <td>Usuário</td>
     <td><span>usuario@usuario.com</span></td>
     <td><span>Sim</span></td>
     <td>(55)99113-4959</td>
     <td>Rua do Comércio nª999</td>
     <td>Ijuí</td>
 </tr>
</table>
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
