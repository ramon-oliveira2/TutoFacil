<?php  
try{
	$pdo = new PDO("mysql:dbname=tutofacil;host:localhost","root","");
}catch(Exception $e){
	echo "Erro na conexao".$e;
}

?>