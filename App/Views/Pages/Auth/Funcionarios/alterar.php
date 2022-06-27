<?php
include($_SERVER["DOCUMENT_ROOT"]."/App/Views/Pages/Auth/header.php");
include($_SERVER["DOCUMENT_ROOT"]."/App/Views/Pages/Auth/Element/nav-menu-autenticado.php");
?>

<h1 class="title">Alterar <?php echo $vars["nameController"];?></h1>
<a style="color: white;" href='/<?php echo $vars["nameController"];?>/index'><span class="btncrud">< Voltar</span></a>

<form action="/<?php echo $vars["nameController"];?>/alterar/<?php echo $vars["getById"]["id"];?>" method="POST">
    <section class="formulario">
        <div class="inputs">
            <div class="input-row">
                <label for="">Nome</label>
                <input autocomplete="off" name="nome" type="text" value="<?php echo $vars["getById"]["nome"];?>" required placeholder="Digite o nome para cadastrar na tabela">

                <label for="">Cpf</label>
                <input autocomplete="off" name="cpf" type="text" value="<?php echo $vars["getById"]["cpf"];?>" required placeholder="Digite o CPF para cadastrar na tabela">
            </div>
        </div>
        <input type="submit" value="Alterar" class="btncrud" />
    </section>
</form>

<?php include($_SERVER["DOCUMENT_ROOT"]."/App/Views/Pages/Auth/footer.php");?>