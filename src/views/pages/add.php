<?php $render('header'); ?>
<h2>Adicionar Novo Usuário</h2>
<form action="<?= $base ?>/new" method="post">
    <label>
        Nome: <br />
        <input type="text" name="name" /><br /><br />
    </label>
    <label>
        Email: <br />
        <input type="email" name="email" /><br /><br />
    </label>

    <input type="submit" value="Adicionar" />
</form>
<?php
$render('footer');