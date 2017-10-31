<?php
include('src/models/FornecedoresModel.php');
class FornecedoresController
{
	public function show()
	{
		$fornecedores_model = new FornecedoresModel();
		$data =  $fornecedores_model->getAll();
		//var_dump($data); exit;
		return compact('data');
	}

	public function edit($id)
	{
		$fornecedores_model = new FornecedoresModel();
		$data =  $fornecedores_model->edit($id);
		return compact('data');
	}

	public function update($id, $post)
	{
		$fornecedores_model = new FornecedoresModel();
		$data =  $fornecedores_model->update($id, $post['nome'], $post['cidade'], $post['estado'], $post['email'], $post['telefone']);

		return true;
	}

	public function store($post)
	{
		$fornecedores_model = new FornecedoresModel();
		$data =  $fornecedores_model->store($post['nome'], $post['cidade'], $post['estado'], $post['email'], $post['telefone']);

		return true;
	}

}
