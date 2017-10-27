<?php
include('../../models/PedidosModel.php');
class PedidosController
{
	public function show()
	{
		$marcas_model = new PedidosModel();
		$data =  $marcas_model->getAll();
		//var_dump($data); exit;
		return compact('data');
	}

	public function edit($id)
	{
		$marcas_model = new PedidosModel();
		$data =  $marcas_model->edit($id);
		return compact('data');
	}

	public function update($id, $post)
	{
		$marcas_model = new PedidosModel();
		$data =  $marcas_model->update($id, $post['nome']);

		return true;
	}

	public function store($post)
	{
		$marcas_model = new PedidosModel();
		$data =  $marcas_model->store($post['descricao'], $post['valor_total'], $post['descricao'], date('Y-m-d h:m:i'));

		return true;
	}

}
