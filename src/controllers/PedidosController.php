<?php
include('src/models/PedidosModel.php');
include('src/models/FornecedoresModel.php');
include('src/models/ProductModel.php');

class PedidosController
{
	public function show()
	{
		$pedidos_model = new PedidosModel();
		$data =  $pedidos_model->getAll();
		return compact('data');
	}

	public function edit($id)
	{
		$pedidos_model = new PedidosModel();
		$data =  $pedidos_model->edit($id);
		return compact('data');
	}

	public function fornecedores($id='')
	{
		$fornecedores_model = new FornecedoresModel();
		if (!isset($id) and $id == '') {
			$fornecedores = $fornecedores_model->edit($id);
		} else {
			$fornecedores = $fornecedores_model->getAll();
		}
		return $fornecedores;
	}

	public function produtosStore($id)
	{
		$pedidos_model = new PedidosModel();
		$data =  $pedidos_models->toreRelation($id, $post['produto'], $post['quamtidade']);
		return compact('data');
	}

	public function produtos()
	{
		$produtos_model = new ProductModel();
		$produtos = $produtos_model->getAllProduct();
		return $produtos;
	}

	public function update($id, $post)
	{
		$pedidos_model = new PedidosModel();
		$data =  $pedidos_model->update($id, $post['nome']);

		return true;
	}

	public function store($post)
	{
		$pedidos_model = new PedidosModel();
		$data = $pedidos_model->store($post['valor_total'], 1, $post['descricao'], date('Y-m-d h:m:i'), $post['fornecedor']);
		return true;
	}
}
