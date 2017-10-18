 <!--Classe de Cabeçalho das Páginas do Sistema -->
 <!DOCTYPE html>
 <html>

 <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- Mini logotipo para barra lateral mini 50x50 pixels -->
      <span class="logo-mini"><b>System</b>Stock</span>
      <!-- Logotipo-->
      <span class="logo-lg"><b>Admin</b>Stock</span>
    </a>
    <!-- Cabeçalho Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Botão de alternância da barra lateral-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Alternar de navegação</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!--Mensagens-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">5</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Você tem 5 novas mensagens</li>
              <li>
                <!-- Menu interno -->
                <ul class="menu">
                  <li><!-- iniciar a mensagem -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="img/suporte.png" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Equipe de Suporte
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>O Painel de Vendas da Matriz </p>
                      <p>parou de funcionar.</p>
                    </a>
                  </li>
                  <!-- terminar a mensagem -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="img/equipe_financeiro.png" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                       Equipe do Financeiro
                        <small><i class="fa fa-clock-o"></i> 5 horas</small>
                      </h4>
                      <p>Contas a pagar</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="img/avatar_suporte.png" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Desenvolvedores
                        <small><i class="fa fa-clock-o"></i> Hoje </small>
                      </h4>
                      <p>Atualização do Sistema amanhã.</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="img/vendas.png" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                      Departamento Vendas
                        <small><i class="fa fa-clock-o"></i> Ontem </small>
                      </h4>
                      <p>Passar a relação de clientes para o Pedro.</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="img/avatar3.png" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Ana Claudia
                        <small><i class="fa fa-clock-o"></i> 2 dias </small>
                      </h4>
                      <p>Por que não comprar o produto incrível?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">Ver todas as mensagens</a></li>
            </ul>
          </li>
          <!-- Notificações -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Você tem 10 notificações</li>
              <li>
                <!-- menu interno: contém dados -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i>5 Novos Fornecedores nos buscaram
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Buscar Parcerias 
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i>5 novos membros se juntaram
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i>30 Vendas Feitas
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> Você mudou seu nome de usuário
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">Ver Todos</a></li>
            </ul>
          </li>
          <!-- Tarefas -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Você Tem 9 Tarefas</li>
              <li>
                <!-- menu interno: contém dados -->
                <ul class="menu">
                  <li> <!-- Item de Tarefas -->
                    <a href="#">
                      <h3>
                       <strong> Análise dos Relatórios</strong>
                        <small class="pull-right">30%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 30%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">30% Completa</span>
                        </div>
                      </div>
                    </a>
                  </li>
                   <!-- Item de Tarefas -->
                  <li> <!-- Item de Tarefas -->
                    <a href="#">
                      <h3>
                        <strong>Criar os Formulários</strong>
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 60%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Completa</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- Item de Tarefas -->
                  <li> <!-- Item -->
                    <a href="#">
                      <h3>
                        <strong>Tarefas que eu preciso fazer</strong>
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 80%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Completa</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- Item de Tarefas -->
                  <li><!-- Item -->
                    <a href="#">
                      <h3>
                        <strong>Planejar as Transições do Mercado</strong>
                        <small class="pull-right">96%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 96%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">96 % Completa</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- Item de Tarefas -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">Ver Todas as Tarefas</a>
              </li>
            </ul>
          </li>
          <!-- Conta de Usuario -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="img/admin.png" class="user-image" alt="User Image">
              <span class="hidden-xs">Administrador</span>
            </a>
            <ul class="dropdown-menu">
              <!-- Imagem Administrador -->
              <li class="user-header">
                <img src="img/admin.png" class="img-circle" alt="User Image">

                <p>
                  Administrador
                  <small>Outubro de 2017</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Seguidores</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Vendas</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Amigos</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Perfil</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sair</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Botão de controle da barra lateral -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  </html>