<?php
include('../../db_core/logicDataBase.php');
class FornecedoresModel
{
	public function getAll() {
		$logic = new LogicDatabase;
		$select = array('column'=> array('*'), 'table'=> array('fornecedores'));
		return $logic->selectValues($select);
	}

	public function edit($id) {
		$logic = new LogicDatabase;
		$select = array('column'=> array('*'), 'table'=> array('fornecedores'), 'where'=>'id='.$id);
		return $logic->selectValues($select);

	}

	public function update($id, $nome, $cidade, $estado, $email, $telefone) {
		$logic = new LogicDatabase;
		$update = array('table'=> 'fornecedores', 'set'=> array('nome="'.$nome.'"', 'cidade="'.$cidade.'"','estado="'.$estado.'"','email="'.$email.'"','telefone="'.$telefone.'"'), 'where'=>'id='.$id);
		$logic->updateValues($update);

	}

	public function store($nome, $cidade, $estado, $email, $telefone) {
		$logic = new LogicDatabase;
		$insert = array('table'=>'fornecedores', 'column'=> array('nome', 'cidade', 'estado', 'email','telefone'), 'value' => array('"'.$nome.'"', '"'.$cidade.'"', '"'.$estado.'"', '"'.$email.'"', '"'.$telefone.'"'));
		$logic->insertValues($insert);
	}

}
