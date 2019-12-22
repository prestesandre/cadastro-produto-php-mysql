<?php include("cabecalho.php");
include("conectaBD.php");
include("banco-categoria.php");
$categorias = listaCategorias($conexao); 
?>
<h2 >Adicionar Produto</h2>
<form action="adiciona-produtp.php" method="POST">
    <table class="table">
        <tr>
            <td> <input class="form-control" id="inputPassword2" placeholder="Nome" type="text" name="nome"><br> </td>
        </tr>
        <tr>
            <td>  <input class="form-control" id="inputPassword2" placeholder="Preço" type="number" name="preco"><br> </td>
        </tr>
        <tr>
            <td> <textarea class="form-control" id="inputPassword2" placeholder="Descrição" name="descricao"></textarea><br> </td>
        </tr>
        <tr>
            <td><input type="checkbox" name="usado" value="true"> Usado</td>
        </tr>
        <tr>
            <td>
                <select name="categoria_id" class="form-control"> 
                    <?php foreach($categorias as $categoria) : ?>
                        <option  value="<?=$categoria['id']?>">
                        <?=$categoria['nome']?>
                        </option>
                    <?php endforeach ?>
                </select>
            </td>
        </tr>
        <tr>
            <td> <input class="btn btn-outline-success" type="submit" value="Cadastrar"> </td>
        </trtr>
    </table>
</form>
<?php include("rodape.php")?>