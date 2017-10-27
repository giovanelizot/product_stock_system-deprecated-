<?php
/**
* 
*/
class LogicDataBase
{
	public function insertValues($datas) {
	$query = "INSERT INTO ";

	foreach ($datas as $key => $value) {
		if($key == "table"){
			$query .= "$value (";
		}

		if($key == "column"){
			foreach ($value as $key2 => $value2) {
				if(next($value)){
					$query .= $value2 .", ";
				}else{
					$query .= $value2 . ") VALUES (";
				}
			}
		}
		if($key == "value"){
			foreach ($value as $key2 => $value2) {
				if(next($value)){
					$query .= $value2 .", ";
				}else{
					$query .= $value2 . ")";
				}
				
			}
		}
	}

	$query .= ";";
	$this->executeQuery($query);
}

public function selectValues($datas){
	$query = "SELECT ";

	foreach ($datas as $key => $value) {
		if($key == "column"){
			foreach ($value as $key2 => $value2) {
				if(next($value)){
					$query .= $value2 .", ";
				}else{
					$query .= $value2 ." ";
				}
			}
		}

		if($key == "table"){
			$query .= "FROM ";
			foreach ($value as $key2 => $value2) {
				if(next($value)){
					$query .= $value2 .", ";
				}else{
					$query .= $value2 ." ";
				}
			}
			
		}

		
		if($key == "where"){
			$query .= "WHERE " . $value. " ";		
		}

		if($key == "orderby"){
			$query .= "ORDER BY " . $value;
			
		}
	}
	$query .= ";";
	return $this->executeSelect($query);
}

public function updateValues($datas){
	$query = "UPDATE ";
	foreach ($datas as $key => $value) {
		if($key == "table"){
			$query .= $value. " ";		
		}

		if($key == "set"){
			$query .= "SET ";
			foreach ($value as $key2 => $value2) {
				if(next($value)){
					$query .= $value2 .", ";
				}else{
					$query .= $value2 ." ";
				}
			}
		}
		
		if($key == "where"){
			$query .= "WHERE " . $value;
		}
	}
	$query .= ";";
	echo $query;
	$this->executeQuery($query);
}

public function deleteValues($datas){
	$query = "DELETE FROM ";
	foreach ($datas as $key => $value) {

		if($key == "table"){
			$query .= $value;
		}

		if($key == "where"){
			$query .= " WHERE " . $value;
		}
	}
	$query .= ";";
	echo $query;
	$this->executeQuery($query);
}

public function executeQuery($query){
	include('../../core/connection.php');
	$data = $conn->query($query);
	if($data==true)	return true;
	
	return false;
}

public function executeSelect($query){
	include('../../core/connection.php');

	$data = $conn->query($query);
	
	while($row = $data->fetch_assoc()){
		$finalResult[] = $row;
	}
	return $finalResult;
}
	
	
}


?>
