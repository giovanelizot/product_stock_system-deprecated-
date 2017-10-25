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
        <h3 class="box-title">Fornecedores</h3>

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
       echo $_POST['cidade'];
       echo "Testando Envio dos Dados";
   }

   ?>
   <form method="post" action="" >
      <fieldset>
        <legend><strong> Cadastro de Fornecedores</strong></legend>
        <label for="nome">Nome</label>
        <br>
        <input type="text" name="nome" size="40" maxlength="75" value="">
        <br>
        <br>
        <label for="Cidade">Cidade</label>
        <br>
        <input type="text" name="cidade" size="40" maxlength="75" value="">
        <br>
        <br>
        <label for="Estado">Estado</label>
        <br>
        <input type="text" name="Estado" size="40" maxlength="75" value="">
        <br>
        <br>
        <!-- select -->
        <div class="form-group">
          <label for="situcao">Selecione o Estado</label>
          <br>
          <select >             
            <option>    </option>
            <option>Acre-AC</option>
            <option>Alagoas-AL</option>
            <option>AAmapá-AP</option>
            <option>Amazonas-AM</option>
            <option>Bahia-BA</option>
            <option>Ceará-CE</option>
            <option>Distrito Federal-DF</option>
            <option>Espírito Santo-ES</option>
            <option>Goiás-GO</option>
            <option>Maranhão-MA</option>
            <option>Mato Grosso-MT</option>
            <option>Mato Grosso do Sul-MS</option>
            <option>Minas Gerais-MG</option>
            <option>Pará-PA</option>
            <option>Paraíba-PB</option>
            <option>Paraná-PR</option>
            <option>Pernambuco-PE</option>
            <option>Piauí-PI</option>
            <option>Rio de Janeiro-RJ</option>
            <option>Rio Grande do Norte-RN</option>
            <option>Rio Grande do Sul-RS</option>
            <option>Rondônia-RO</option>
            <option>Roraima-RR</option>
            <option>Santa Catarina-SC</option>
            <option>São Paulo-SP</option>
            <option>Sergipe-SE</option>
            <option>Tocantins-TO</option>        
        </select>
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
        <input  type="Telefone" name="telefone" data-inputmask='"mask": "(99) 9999-9999"' data-mask>
        <br>
        <br>
        <label for="marca">Endereço</label>
        <br>
        <input type="text" name="endereco" size="40" maxlength="75" value="">
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
            <h3 class="box-title">Lista de Fornecedores
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
               <strong>Editar Fornecedor</strong><br> 
               <input type="text" name="id" size="40" maxlength="75" value="">
               <button type="submit" value="Enviar" class="btn btn-info">
                 Editar
             </button><br><br> 
             <strong>Deletar Fornecedor</strong><br> 
             <input type="text" name="id" size="40" maxlength="75" value="">
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
              <th>Cidade</th>
              <th>Estado</th>
              <th>E-mail</th>
              <th>Telefone</th>
              <th>Endereço</th>
          </tr>
          <tr class="info">
              <td>Usuario</td>
              <td><span>Ijuí</span></td>
              <td>Rio Grande do Sul-RS</td>
              <td>usuario@usuario.com</td>
              <td>(55)99113-4959</td>
              <td>Rua do Comércio 99,Ijuí RS</td>
          </tr>
          <tr class="info">
            <td>Usuario</td>
            <td><span>Ijuí</span></td>
            <td>Rio Grande do Sul-RS</td>
            <td>usuario@usuario.com</td>
            <td>(55)99113-4959</td>
            <td>Rua do Comércio 99,Ijuí RS</td>
        </tr>
        <tr class="info">
            <td>Usuario</td>
            <td><span>Ijuí</span></td>
            <td>Rio Grande do Sul-RS</td>
            <td>usuario@usuario.com</td>
            <td>(55)99113-4959</td>
            <td>Rua do Comércio 99,Ijuí RS</td>
        </tr>
        <tr class="info">
         <td>Usuario</td>
         <td><span>Ijuí</span></td>
         <td>Rio Grande do Sul-RS</td>
         <td>usuario@usuario.com</td>
         <td>(55)99113-4959</td>
         <td>Rua do Comércio 99,Ijuí RS</td>
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
