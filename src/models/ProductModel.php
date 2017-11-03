<?php

class ProductModel
{
	public function getAllProduct()
	{
		include('src/core/connection.php');
		$data =	$conn->query('SELECT p.id, p.nome, p.valor, m.nome AS marca, p.qtd FROM produtos AS p, marcas AS m WHERE m.id = p.marcas_id;');
		while($row = $data->fetch_assoc()){
			$finalResult[] = $row;
		}

		return $finalResult;
	}

	public function marcas() {
		include('src/db_core/logicDataBase.php');
		$logic = new LogicDatabase;
		$select = array('column'=> array('id', 'nome'), 'table'=> array('marcas'));
		return $logic->selectValues($select);
	}

	public function edit($id)
	{
		include('src/db_core/logicDataBase.php');
		$logic = new LogicDatabase;
		$select = array('column'=> array('id', 'nome', 'marcas_id'), 'table'=> array('produtos'), 'where'=>'id='.$id);
		return $logic->selectValues($select);
	}


	public function updateProduct($id, $nome, $valor, $qtd, $marcas_id, $empresa_id)
	{
		include('src/db_core/logicDataBase.php');
		$logic = new LogicDatabase;
		$update = array('table'=> 'produtos', 'set'=> array('nome="'.$nome.'"', 'valor="'.$valor.'"', 'qtd="'.$qtd.'"', 'marcas_id="'.$marcas_id.'"', 'empresa_id="'.$empresa_id.'"',), 'where'=>'id="'.$id.'"');

		$logic->updateValues($update);

	}

	public function storeProduct($nome, $valor, $qtd, $marcas_id, $empresa_id)
	{
		include('src/db_core/logicDataBase.php');
		$logic = new LogicDatabase;
		$insert = array('table'=>'produtos', 'column'=> array('nome', 'valor', 'qtd', 'marcas_id', 'empresa_id'), 'value' => array('"'.$nome.'"', '"'.$valor.'"', '"'.$qtd.'"', '"'.$marcas_id.'"', '"'.$empresa_id.'"'));
		$logic->insertValues($insert);
	}

}
