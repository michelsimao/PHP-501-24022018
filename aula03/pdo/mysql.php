<?php

require "conexao.php";

$sql   = "insert into usuarios (usuario, senha) values ('michel2', 'michel')";
$sql5  = "insert into usuarios (usuario, senha) values ('michel2', 'michel')";

$sql2 = "update usuarios set usuario='maria2', senha='11111' where id = 4"; 
$sql3 = "delete from usuarios where id = 5";
$sql4 = "select * from usuarios";

//$dbMysql->exec($sql3);

/*$result = $dbMysql->query($sql4);

$usuarios = $result->fetchall();

echo "<pre>";
print_r($usuarios);*/

try{
	$dbMysql->beginTransaction();

	$dbMysql->exec($sql);
	$dbMysql-->exec($sql5);


	$dbMysql->commit();

}catch(PDOException $e){
	$dbMysql->rollback();
	echo "Erro: " . $e->getMessage();
}