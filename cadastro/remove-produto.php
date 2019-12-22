<?php include("cabecalho.php");
include("conectaBD.php");
include("bd-produto.php"); ?>
<?php
$id= $_POST['id'];
removeProduto($conexao, $id);
Header("location: lista.php?removido=true"); 
die();
?>