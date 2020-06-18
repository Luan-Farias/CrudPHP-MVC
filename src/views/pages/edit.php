<?php $render('header'); ?>
<h2>Editando Usuário</h2>
<form action="<?= $base ?>/users/<?= $user['id'] ?>/edit" method="post">
    <label>
        Nome: <br />
        <input type="text" value="<?= $user['name'] ?>" name="name" /><br /><br />
    </label>
    <label>
        Email: <br />
        <input type="email" value="<?= $user['email'] ?>" name="email" /><br /><br />
    </label>

    <input type="submit" value="Salvar" />
</form>
<?php
$render('footer');