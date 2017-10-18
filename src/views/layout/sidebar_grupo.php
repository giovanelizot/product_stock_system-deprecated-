<!-- Sidebar Barra lateral de controle -->
<!DOCTYPE html>
<html>

  <aside class="control-sidebar control-sidebar-dark">
    <!-- Cria as guias -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tabulações do Menu de Controle -->
    <div class="tab-content">
      <!-- Conteúdo da guia inicial -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Atividades Recentes</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Aniversários</h4>

                <p>Mês de Outubro</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">O Gerente de Vendas Atualizou seu Perfil</h4>

                <p>Novo Telefone:+55(55)99999-9999</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Chefia do Recursos Humanos Atualizou seu endereço de e-mail</h4>

                <p>chefia@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">No momento 96 vendas sendo executadas na Matriz</h4>

                <p>Tempo de execução 5 segundos</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tarefas Progresso</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Analizar o Design dos Projetos da nova campanha de Vendas
                <span class="label label-danger pull-right">85%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 85%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Atualizar Currículo
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Backup do Sistema
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Consultar as Folhas de Pagamento no Ultimo Mês dos Funcionários 
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->
      </div>
      <!-- /.tab-pane -->
      <!-- Conteúdo da guia de estatísticas -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Conteúdo da guia de estatísticas</div>
      <!-- /.tab-pane -->
      <!-- Configurações do Conteúdo-->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">Configurações Gerais</h3>
          <div class="form-group">
            <label class="control-sidebar-subheading">
              Uso do painel de relatórios
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Algumas informações sobre esta opção de configurações gerais
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Permitir o redirecionamento de email
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Existem outros conjuntos de opções disponíveis
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expor o nome do autor nas postagens
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Permitir que o usuário mostre seu nome nas postagens 
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Configurações do Chat</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Mostre-me como online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Desligar notificações
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Eliminar histórico de bate-papo
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Adiciona o plano de fundo da barra lateral. Esta div deve ser colocada
       imediatamente após a barra lateral de controle do Painel -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
</html>
