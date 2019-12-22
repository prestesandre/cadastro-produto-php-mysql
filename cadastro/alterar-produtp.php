<?php include("cabecalho.php");
include("conectaBD.php");
include("bd-produto.php"); ?>
<?php
$id = $_POST['id'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
$categoria_id = $_POST['categoria_id'];
if(array_key_exists('usado', $_POST)){
    $usado = "true";
} else {
    $usado = "false";
}
if(alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado)) { ?>
    <p class="text-success"> o Produto <?= $nome; ?> , <?= $preco; ?> alterado com sucesso!</p>
<?php } else { ?>
    <p class="text-danger"> o Produto <?= $nome; ?> , <?= $preco; ?> não foi alterado.</p>
<?php 
}
?>
<?php include("rodape.php")?>
   