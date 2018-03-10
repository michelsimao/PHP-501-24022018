<?php

require "conexao.php";

$sql   = "insert into usuarios (usuario, senha) values ('michel3', 'michel')";
$sql5  = "insert into usuarios (usuario, senha) values ('michel3', 'michel')";

$sql2 = "update usuarios set usuario='maria2', senha='11111' where id = 4"; 
$sql3 = "delete from usuarios where id = 5";
$sql4 = "select * from usuarios";


/*$result = $dbPostgres->query($sql4);

$usuarios = $result->fetchall(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($usuarios);
*/
try{
	$dbPostgres->beginTransaction();

	$dbPostgres->exec($sql);
	$dbPostgres-->exec($sql5);


	$dbPostgres->commit();

}catch(PDOException $e){
	$dbPostgres->rollback();
	echo "Erro: " . $e->getMessage();
}