<?php

class FornecedoresModel
{
	public function getAll() {
		include('../../core/connection.php');
		$data =	$conn->query('SELECT * FROM fornecedores;');
		while($row = $data->fetch_assoc()){
			$finalResult[] = $row;
		}
		return $finalResult;
	}

	public function edit($id) {
		include('../../core/connection.php');
		$data =	$conn->query('SELECT * FROM fornecedores WHERE id = '.$id.';');
		while($row = $data->fetch_assoc()){
			$finalResult[] = $row;
		}
		return $finalResult;
	}

	public function update($id, $nome, $cidade, $estado, $email, $telefone) {
		include('../../core/connection.php');
		if ($conn->query("UPDATE fornecedores SET nome = '".$nome."', cidade = '".$cidade."', estado = '".$estado."', email = '".$email."', telefone = '".$telefone."' WHERE id=".$id	) === TRUE) {
			return true;
		}
		return false;
	}

	public function store($nome, $cidade, $estado, $email, $telefone) {
		include('../../core/connection.php');
		if ($conn->query("INSERT INTO fornecedores (nome, cidade, estado, email, telefone) VALUES ('".$nome."', '".$cidade."', '".$estado."', '".$email."', '".$telefone."');") === TRUE) {
			return true;
		}
		return false;
	}

}
