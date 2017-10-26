<?php

require 'connection.php';


function insertValues(array $datas){
	$query = "INSERT INTO "
	foreach ($datas as $key => $value) {
		if($key == "tabela"){
			$query .= "$value (";
		}

		if($key == "column"){
			foreach ($value as $key2 => $value2) {
				if(next($value2)){
					$query .= $value2 .", ";
				}else{
					$query .= $value2 . " )";
				}
			}
		}
		if($key == "value"){
			foreach ($value as $key2 => $value2) {
				if(next($value2)){
					$query .= $value2 .", ";
				}else{
					$query .= $value2 . " )";
				}

			}
		}
	}
	$query .= ";";
}

function selectValues(array $datas){
	$query = "SELECT ";

	foreach ($datas as $key => $value) {
		if($key == "column"){
			foreach ($value as $key2 => $value2) {
				if(next($value2)){
					$query .= $value2 .", ";
				}else{
					$query .= $value2 ." ";
				}
			}
		}

		if($key == "tabela"){
			$query .= "FROM ";
			foreach ($value as $key2 => $value2) {
				if(next($value2)){
					$query .= $value2 .", ";
				}else{
					$query .= $value2 ." ";
				}
			}

		}


		if($key == "where"){
			$query .= "WHERE ";
			foreach ($value as $key2 => $value2) {
				if(next($value2)){
					$query .= $value2 .", ";
				}else{
					$query .= $value2. " ";
				}

			}
		}
		if($key == "groupby"){
			$query .= "GROUP BY "
			foreach ($value as $key2 => $value2) {
				if(next($value2)){
					$query .= $value2 .", ";
				}else{
					$query .= $value2. " ";
				}

			}
		}
	}
	$query .= ";";
}

function update(array $datas){
	$query .= "UPTADE ";
	foreach ($datas as $key => $value) {
		if($key == "tabela"){
			foreach ($value as $key2 => $value2) {
				if(next($value2)){
					$query .= $value2 .", ";
				}else{
					$query .= $value2 ." ";
				}
			}

		}

		if($key == "set"){
			$query .= "SET ";
			foreach ($value as $key2 => $value2) {
				if(next($value2)){
					$query .= $value2 .", ";
				}else{
					$query .= $value2 ." ";
				}
			}
		}

		if($key == "where"){
			$query .= "WHERE ";
			foreach ($value as $key2 => $value2) {
				if(next($value2)){
					$query .= $value2 .", ";
				}else{
					$query .= $value2. " ";
				}

			}
		}
	}
	$query .= ";";
}

function delete(array $datas){
	$query .= "DELETE FROM ";
	foreach ($datas as $key => $value) {
		if($key == "tabela"){
			foreach ($value as $key2 => $value2) {
				if(next($value2)){
					$query .= $value2 .", ";
				}else{
					$query .= $value2 ." ";
				}
			}

		}

		if($key == "where"){
			$query .= "WHERE ";
			foreach ($value as $key2 => $value2) {
				if(next($value2)){
					$query .= $value2 .", ";
				}else{
					$query .= $value2. " ";
				}

			}
		}
	}
	$query .= ";";
}

?>
