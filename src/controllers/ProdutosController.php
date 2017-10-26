<?php

class ProdutosController
{

	public function show()
	{
		$data = array();
		$data = (object) $array;
		$data->nome = 'caneta Azul';
		$data->marca = 'BIC';
		$data->preco = '220,00';
		$data->quantidade = '400';
		return compact('data');
	}

}
