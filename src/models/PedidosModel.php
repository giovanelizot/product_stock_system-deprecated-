<?php

class PedidosModel
{
	public function getAll()
	{
		include('src/core/connection.php');
		$data =	$conn->query('SELECT * FROM pedidos;');
		while($row = $data->fetch_assoc()){
			$finalResult[] = $row;
		}
		return $finalResult;
	}

	public function storeRelation($pedido, $produtos_id, $qtd)
	{
		include('src/core/connection.php');
		$data =	$conn->query('INSERT INTO pedidos_has_produtos (pedidos_id, produtos_id, qtd) VALUES ('.$pedido.', '.$produtos_id.', '.$qtd.');');
		while($row = $data->fetch_assoc()){
			$finalResult[] = $row;
		}
		return $finalResult;
	}

	public function fornecedores() {
		include('src/core/connection.php');
		$data =	$conn->query('SELECT * FROM fornecedores;');
		while($row = $data->fetch_assoc()){
			$finalResult[] = $row;
		}
		return $finalResult;
	}

	public function edit($id)
	{
		include('src/core/connection.php');
		$data =	$conn->query('SELECT * FROM pedidos WHERE id = '.$id.';');
		while($row = $data->fetch_assoc()){
			$finalResult[] = $row;
		}
		return $finalResult;
	}

	public function update($id, $nome)
	{
		include('src/core/connection.php');
		if ($conn->query("UPDATE marcas SET nome = '".$nome."' WHERE id=".$id	) === TRUE) {
			return true;
		}
		return false;
	}

	public function store($valor_total, $situacao, $descricao, $data, $fornecedores_id)
	{
		include('src/core/connection.php');
		if ($conn->query("INSERT INTO pedidos (valor_total, situacao, descricao, data, fornecedores_id) VALUES (".$valor_total.", ".$situacao.", '".$descricao."', '".$data."', ".$fornecedores_id.");") === TRUE) {
			return true;
		}
		return false;
	}

}
