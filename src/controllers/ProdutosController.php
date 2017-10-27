<?php
include('../../models/ProductModel.php');
class ProdutosController
{
	public function show()
	{
		$product_model = new ProductModel();
		$data =  $product_model->getAllProduct();
		//var_dump($data); exit;
		return compact('data');
	}

	public function marcas()
	{
		$product_model = new ProductModel();
		$data =  $product_model->marcas();
		return compact('data');
	}

	public function edit($id)
	{
		$product_model = new ProductModel();
		$data =  $product_model->edit($id);
		return compact('data');
	}

	public function update($id, $post)
	{
		$product_model = new ProductModel();
		$data =  $product_model->updateProduct($id, $post['nome'], 0, 0, $post['marca'], 1);

		return true;
	}

	public function store($post)
	{
		$product_model = new ProductModel();
		$data =  $product_model->storeProduct($post['nome'], 0, 0, $post['marca'], 1);

		return true;
	}

}
