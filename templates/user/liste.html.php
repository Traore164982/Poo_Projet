<h2 class="mt-2 text-center"><?= $title?></h2>
<table class="container mt-5">
    <tr class="bg-info text-dark text-center">
        <th>N°</th>
        <th>Nom Complet</th>
        <th>Login</th>
        <th>Role</th>
        <th>Actions</th>
    </tr>
    <?php
        $i=1;
        foreach ($users as $user) {
    ?>
    <tr class="text-center">
        <td><?= $i++?></td>
        <td><?= $user->nom_complet?></td>
        <td><?= $user->login ?></td>
        <td><?= $user->role ?></td>
        <td>
            <button class="btn btn-outline-warning">Modifier</button>
            <button class="btn btn-outline-danger">Supprimer</button>
            <button class="btn btn-outline-primary">Details</button>
        </td>
    </tr> 
        <?php }
    ?>
</table>