<?php include("cabecalho.php");
include("conectaBD.php");
include("bd-produto.php"); ?>
<?php 
    if(array_key_exists("removido", $_GET) && $_GET["removido"]=="true"){
?>
        <p class="alert-success">Produto removido com sucesso!</p>
<?php  
    }
?>
<h2>Produto e Preço</h2>
<table class="table table-striped table-bordered">
    <?php
        $produtos = listaProdutos($conexao);
        foreach($produtos as $produto) {
?>
    <tr>
        <td><?=$produto['nome'] ?></td>
        <td><?=$produto['preco'] ?></td>
        <td><?=substr($produto['descricao'], 0, 30)?></td>
        <td><?=$produto['categoria_nome']?></td> 
        <td><a class="btn btn-primary" href="produto-altera-formulario.php?id=<?=$produto['id']?>">alterar</a></td> 
        <td>
            <form action="remove-produto.php" method="POST">
                <input type="hidden" name="id" value="<?=$produto['id']?>">
                <button  class="btn btn-danger">Remover</button>
            </form>
        </td>
    </tr>     
<?php
    }
?>  
</table>
<?php include("rodape.php")?>

