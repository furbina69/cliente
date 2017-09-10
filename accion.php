<?php
//session_start();
//$idEmpresa = $_SESSION["se_id_empresa"];
$idEmpresa = 1;
require_once 'Class.php';
$objeto = new DOMClass();
$datas = $objeto->BuscaClintes($idEmpresa);
echo '<table border="1">';
echo '<theard>';
echo '<tr>';
echo '<td>Id</td>';
echo '<td>Nombre Cliente</td>';
echo '<td>Rut</td>';
echo '<td>Direccion</td>';
echo '</tr>';
echo '</theard>';
echo '<tbody>';
foreach ($datas as $v):
	echo '<tr>';
	echo '<td>'.$v['id'];
	echo '<td>'.$v['NombreCliente'];
	echo '<td>'.$v['Rut'];
	echo '<td>'.$v['Direccion'];
	echo '</tr>';
endforeach;
echo '</tbody>';
echo '</table>'
?>
