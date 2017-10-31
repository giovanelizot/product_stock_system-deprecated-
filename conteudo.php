<?php 
include('src/views/layout/head.php');
include('src/views/layout/header.php');

if(isset($_GET['m']))
{
	switch ($_GET['m']) {
		case 'fornecedores':
			if(isset($_GET['a']))
			{
				switch ($_GET['a']) {
					case 'cadastrar':
						include('src/views/fornecedores/form.php');
						break;
					case 'listar':
						include('src/views/fornecedores/show.php');
						break;
					case 'editar':
						include('src/views/fornecedores/form.php');
						break;
					case 'excluir':
						include('src/views/fornecedores/form.php');
						break;


					default:
							# code...
					break;
				}
			}
			break;	
		case 'produtos':
			if(isset($_GET['a']))
				{
					switch ($_GET['a']) {
						case 'cadastrar':
							include('src/views/produtos/form.php');
							break;
						case 'listar':
							include('src/views/produtos/show.php');
							break;
						case 'editar':
							include('src/views/produtos/form.php');
							break;
						case 'excluir':
							include('src/views/produtos/form.php');
							break;


						default:
								# code...
						break;
					}
				}
				break;
				case 'marcas':
			if(isset($_GET['a']))
				{
					switch ($_GET['a']) {
						case 'cadastrar':
							include('src/views/marcas/form.php');
							break;
						case 'listar':
							include('src/views/marcas/show.php');
							break;
						case 'editar':
							include('src/views/marcas/form.php');
							break;
						case 'excluir':
							include('src/views/marcas/form.php');
							break;


						default:
								# code...
						break;
					}
				}
				break;
		default:
			//include('src/view/error404.php');
		break;
	}
}


include('src/views/layout/footer.php');
include('src/views/layout/foot.php');

?>