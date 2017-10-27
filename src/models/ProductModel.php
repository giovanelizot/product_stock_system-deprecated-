<?php

class ProductModel
{
	public function getAllProduct()
	{
		include('../../core/connection.php');
		$data =	$conn->query('SELECT p.nome, p.valor, m.nome AS marca, p.qtd FROM produtos AS p, marcas AS m WHERE m.id = p.marcas_id;');
		while($row = $data->fetch_assoc()){
			$finalResult[] = $row;
		}
		return $finalResult;
	}

	public function marcas() {
		include('../../core/connection.php');
		$data =	$conn->query('SELECT id, nome FROM marcas');
		while($row = $data->fetch_assoc()){
			$finalResult[] = $row;
		}
		return $finalResult;
	}

	public function edit($id)
	{
		include('../../core/connection.php');
		$data =	$conn->query('SELECT id, nome, marcas_id FROM produtos WHERE id = '.$id.';');
		while($row = $data->fetch_assoc()){
			$finalResult[] = $row;
		}
		return $finalResult;
	}

	public function updateProduct($id, $nome, $valor, $qtd, $marcas_id, $empresa_id)
	{
		include('../../core/connection.php');
		if ($conn->query("UPDATE produtos SET nome = '".$nome."', valor = ".$valor.", qtd = ".$qtd.", marcas_id = ".$marcas_id.", empresa_id = ".$empresa_id." WHERE id = ".$id.");") === TRUE) {
			return true;
		}
		return false;
	}

	public function storeProduct($nome, $valor, $qtd, $marcas_id, $empresa_id)
	{
		include('../../core/connection.php');
		if ($conn->query("INSERT INTO produtos (nome, valor, qtd, marcas_id, empresa_id) VALUES ('".$nome."', ".$valor.", ".$qtd.", ".$marcas_id.", ".$empresa_id.");") === TRUE) {
			return true;
		}
		return false;
	}

}
