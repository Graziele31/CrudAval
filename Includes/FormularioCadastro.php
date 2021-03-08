<?php
include("Class/ClassCrud.php");
/* Edição de dados */
if (isset($_GET['id'])) {
    $Acao = "Editar";

    $Crud = new ClassCrud();
    $BFetch = $Crud->selectDB("*", "cadastro", "where Id=?", array($_GET['id']));
    $Fetch = $BFetch->fetch(PDO::FETCH_ASSOC);
    $Id = $Fetch['Id'];
    $Nome = $Fetch['Nome'];
    $Sexo = $Fetch['Sexo'];
    $Cidade = $Fetch['Cidade'];
}

/* Cadastro novo */ else {
    $Acao = "Cadastrar";
    $Id = 0;
    $Nome = "";
    $Sexo = "";
    $Cidade = "";
}
?>

<div class="Resultado"></div>

<div class="Formulario">
    <h1 class="Center">Cadastro</h1>

    <form name="FormCadastro" id="FormCadastro" method="post" action="Controllers/ControllerCadastro.php">
        <input type="hidden" id="Acao" name="Acao" value="">

        <div class="FormularioInput">
            Nome: <br>
            <input type="text" id="Nome" name="Nome">
        </div>

        <div class="FormularioInput">
            Sexo: <br>
            <select name="Sexo" id="Sexo">
                <option value="">Selecione</option>
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
            </select>
        </div>

        <div class="FormularioInput">
            Cidade: <br>
            <input type="text" id="Cidade" name="Cidade">
        </div>

        <div class="FormularioInput FormularioInput100 Center">
            <input type="submit" value="Cadastrar">
        </div>
    </form>
</div>
