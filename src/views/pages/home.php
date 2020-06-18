<?php $render('header'); ?>
<a href="<?= $base ?>/new">Novo Usuário</a>
<table border="1" width="100%">
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($users as $user) : ?>
    <tr>
        <th><?= $user['id'] ?></th>
        <th><?= $user['name'] ?></th>
        <th><?= $user['email'] ?></th>
        <th>
            <a href="<?= $base ?>/users/<?= $user['id'] ?>/edit">
                <img src="<?= $base ?>/assets/images/document.png" width="20" alt="" srcset="">
            </a>
            <a href="<?= $base ?>/users/<?= $user['id'] ?>/delete"
                onclick="return confirm('Você deseja mesmo deletar o <?= $user['name'] ?>')">
                <img src="<?= $base ?>/assets/images/trash.png" width="20" alt="" srcset="">
            </a>
        </th>
    </tr>
    <?php endforeach ?>
</table>
<?php $render('footer');