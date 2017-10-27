<?php

include('logicDataBase.php');

$insert = array('table'=>'empresa', 'column'=> array('nome', 'telefone', 'endereco'), 'value' => array('"zzzzz"', '823718231', '"ruaashdua"'));
$select = array('column'=> array('id', 'nome'), 'table'=> array('marcas'), 'where' => 'id=1');
$update = array('table'=> 'empresa', 'set'=> array('nome="matheus"', 'telefone=91109930'), 'where'=>'nome="matheus"');
$delete = array('table'=> 'empresa', 'where'=> 'nome="matheus"');

//insertValues($insert);
//selectValues($select);
//updateValues($update);
//deleteValues($delete);
?>