<?php
class Functions
{
	public function CheckProduct($id) {
		include('src/core/connection.php');
		$data =	$conn->query('SELECT pr.nome, pp.qtd as qtd FROM produtos as pr, pedidos as pe, pedidos_has_produtos as pp WHERE pp.pedidos_id = '.$id.' AND pe.id = pp.pedidos_id AND pr.id = pp.produtos_id');
		while($row = $data->fetch_assoc()){
			$finalResult[] = $row;
		}
		return $finalResult;
	}

}
