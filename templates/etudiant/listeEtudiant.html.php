<h2 class="mt-2 text-center"><?= $title?></h2>
<table class="container mt-5">
    <tr class="bg-info text-dark text-center">
        <th>N°</th>
        <th>Nom Complet</th>
        <th>Login</th>
        <th>Role</th>
        <th>Sexe</th>
        <th>Actions</th>
    </tr>
    <?php
        $i=1;
        foreach ($etudiants as $etudiant) {
    ?>
    <tr class="text-center">
        <td><?= $i++?></td>
        <td><?= $etudiant->nom_complet?></td>
        <td><?= $etudiant->login ?></td>
        <td><?= $etudiant->role ?></td>
        <td><?= $etudiant->sexe ?></td>
        <td>
            <button class="btn btn-outline-warning">Modifier</button>
            <button class="btn btn-outline-danger">Supprimer</button>
            <button class="btn btn-outline-primary">Details</button>
        </td>
    </tr> 
        <?php }
    ?>
</table>