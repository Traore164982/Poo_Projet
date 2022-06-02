<?php 
    use App\Core\HtmlProvider;
    HtmlProvider::navInfo($title,"info",5,$btn,"success","/addattache");
?>
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
        foreach ($acs as $ac) {
    ?>
    <tr class="text-center">
        <td><?= $i++?></td>
        <td><?= $ac->nom_complet?></td>
        <td><?= $ac->login ?></td>
        <td><?= $ac->role ?></td>
        <td>
            <button class="btn btn-outline-warning">Modifier</button>
            <button class="btn btn-outline-danger">Supprimer</button>
            <button class="btn btn-outline-primary">Details</button>
        </td>
    </tr> 
        <?php }
    ?>
</table>