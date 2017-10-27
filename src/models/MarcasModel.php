<?php

class MarcasModel
{
	public function getAll()
	{
		include('../../core/connection.php');
		$data =	$conn->query('SELECT * FROM marcas;');
		while($row = $data->fetch_assoc()){
			$finalResult[] = $row;
		}
		return $finalResult;
	}

	public function edit($id)
	{
		include('../../core/connection.php');
		$data =	$conn->query('SELECT * FROM marcas WHERE id = '.$id.';');
		while($row = $data->fetch_assoc()){
			$finalResult[] = $row;
		}
		return $finalResult;
	}

	public function update($id, $nome)
	{
		include('../../core/connection.php');
		if ($conn->query("UPDATE marcas SET nome = '".$nome."' WHERE id=".$id	) === TRUE) {
			return true;
		}
		return false;
	}

	public function store($nome)
	{
		include('../../core/connection.php');
		if ($conn->query("INSERT INTO marcas (nome) VALUES ('".$nome."');") === TRUE) {
			return true;
		}
		return false;
	}

}
