<?php include("cabecalho.php");
include("conectaBD.php");
include("banco-categoria.php");
include("bd-produto.php");
$id = $_GET['id'];
$produto = buscaProduto($conexao, $id);
$categorias = listaCategorias($conexao); 
$usado = $produto['usado'] ? "checked='checked'"  : "";
?>
<h2 >Aterar Produto</h2>
<form action="alterar-produtp.php" method="POST">
    <input type="hidden" name="id" value="<?=$produto['id']?>">
    <table class="table">
        <tr>
            <td> <input class="form-control" id="inputPassword2" placeholder="Nome" type="text" name="nome" value="<?=$produto['nome']?>"><br> </td>
        </tr>
        <tr>
            <td>  <input class="form-control" id="inputPassword2" placeholder="Preço" type="number" name="preco" value="<?=$produto['preco']?>"><br> </td>
        </tr>
        <tr>
            <td> <textarea class="form-control" id="inputPassword2" placeholder="Descrição" name="descricao"><?=$produto['descricao']?></textarea><br> </td>
        </tr>
        <tr>
            <td><input type="checkbox" name="usado" <?=$usado?> value="true"> Usado</td>
        </tr>
        <tr>
            <td>
                <select name="categoria_id" class="form-control"> 
                    <?php foreach($categorias as $categoria) : 
                        $essaECategoria = $produto['categoria_id'] == $categoria['id'];
                        $selecao = $essaECategoria ? "selected='selected'" : "";
                        ?>
                        <option  value="<?=$categoria['id']?>" <?=$selecao?>>
                        <?=$categoria['nome']?>
                        </option>
                    <?php endforeach ?>
                </select>
            </td>
        </tr>
        <tr>
            <td> <input class="btn btn-outline-success" type="submit" value="Alterar"> </td>
        </trtr>
    </table>
</form>
<?php include("rodape.php")?>