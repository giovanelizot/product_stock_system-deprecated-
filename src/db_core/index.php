<?php

include('crud.php');

$insert = array('table'=>'empresa', 'column'=> array('nome', 'telefone', 'endereco'), 'value' => array('"zzzzz"', '823718231', '"ruaashdua"'));
$select = array('column'=> array('nome', 'telefone'), 'table'=> array('empresa'), 'where'=> 'nome = "matheus" and telefone > 10', 'orderby'=> 'nome asc');
$update = array('table'=> 'empresa', 'set'=> array('nome="matheus"', 'telefone=91109930'), 'where'=>'nome="matheus"');
$delete = array('table'=> 'empresa', 'where'=> 'nome="matheus"');

//insertValues($insert);
//selectValues($select);
//updateValues($update);
//deleteValues($delete);
?>