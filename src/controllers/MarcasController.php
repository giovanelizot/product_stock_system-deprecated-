<?php
include('src/models/MarcasModel.php');
class MarcasController
{
	public function show()
	{
		$marcas_model = new MarcasModel();
		$data =  $marcas_model->getAll();
		//var_dump($data); exit;
		return compact('data');
	}

	public function edit($id)
	{
		$marcas_model = new MarcasModel();
		$data =  $marcas_model->edit($id);
		return compact('data');
	}

	public function update($id, $post)
	{
		$marcas_model = new MarcasModel();
		$data =  $marcas_model->update($id, $post['nome']);

		return true;
	}

	public function store($post)
	{
		$marcas_model = new MarcasModel();
		$data =  $marcas_model->store($post['nome']);

		return true;
	}

}
