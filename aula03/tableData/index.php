<?php

require "autoload.php";

use model\usuario\usuario;
use DAO\usuarioDAO\usuarioDAO;

echo "<pre>";

$user = new Usuario("", "");
//$user->save();


$teste = $user::find(19);
$teste->setUsuario("robertinha");
$teste->save();
print_r($teste);



/*$dao = new usuarioDAO();

echo "FIND:<br>";
print_r($dao->find(4));

echo "<hr>GETUSUARIO:<br>";
$maria = $dao->find(4);
echo $maria->getUsuario();

echo "<hr>ALL:<br>";
print_r (usuario::all());

echo $dao->*/

//print_r ($dao->all());


//$dao->insert($michel);