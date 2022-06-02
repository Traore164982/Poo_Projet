<?php 
    use App\Core\HtmlProvider;
    HtmlProvider::navInfo($title,"info",5,$btn,"success","/addClasse");
?>
<table class="container mt-5">
    <tr class="bg-info text-dark text-center">
        <th>N°</th>
        <th>Libelle</th>
        <th>Filière</th>
        <th>Niveau</th>
        <th><a href="/addClasse" class="btn btn-sm btn-outline-primary">+</a></th>
    </tr>
    <?php
        $i=1;
        foreach ($classes as $classe) {
            $classe->numero=$i++;
    ?>
    <tr class="text-center">
        <?= HtmlProvider::td(["numero","libelle","filiere","niveau"],$classe)?>
        <td>
            <button class="btn btn-outline-warning">Modifier</button>
            <button class="btn btn-outline-danger">Supprimer</button>
            <button class="btn btn-outline-primary">Details</button>
        </td>
    </tr> 
        <?php }
    ?>
</table>