<?php $render('header');?>
<h1>Adicionar Novo Usuarios</h1>

<form action="<?=$base;?>/novo" method="post">
    <label>E-mail:</label><br>
    <input type="email" name="email" id="email"><br><br>
    <label>Senha:</label><br>
    <input type="password" name="senha" id="senha"><br><br>
    <label>Nome:</label><br>
    <input type="text" name="nome" id="nome"><br><br>
    <input href="" type="submit" value="Cadastrar">
</form>



<?php $render('footer');?>