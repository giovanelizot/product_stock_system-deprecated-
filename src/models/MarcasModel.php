<?php

include('src/db_core/logicDataBase.php');
class MarcasModel
{
	public function getAll()
	{
		$logic = new LogicDatabase;
		$select = array('column'=> array('*'), 'table'=> array('marcas'));
		return $logic->selectValues($select);
	}

	public function edit($id)
	{
		$logic = new LogicDatabase;
		$select = array('column'=> array('*'), 'table'=> array('marcas'), 'where'=>'id='.$id);
		return $logic->selectValues($select);
	}

	public function update($id, $nome)
	{
		$logic = new LogicDatabase;
		$update = array('table'=> 'marcas', 'set'=> array('nome="'.$nome.'"'), 'where'=>'id="'.$id.'"');
		$logic->updateValues($update);
	}

	public function store($nome)
	{
		$logic = new LogicDatabase;
		$insert = array('table'=>'marcas', 'column'=> array('nome'), 'value' => array('"'.$nome.'"'));
		$logic->insertValues($insert);
	}

}
