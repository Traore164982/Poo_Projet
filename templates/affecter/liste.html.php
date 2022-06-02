<?php 
    use App\Core\HtmlProvider;

use function App\Core\hidden;

    HtmlProvider::navInfo($title,"info",5,$btn,"success","/affecter");
?>
<table class="container mt-5">
    <tr class="bg-info text-dark text-center">
        <th>N°</th>
        <th>Module</th>
        <th>Professeur</th>
        <th><a href="/enseigner" class="btn btn-sm btn-outline-primary">+</a></th>
    </tr>
    <?php
        $i=1;
        foreach ($affects as $affect) {
            $affect->numero=$i++;
    ?>
    <tr class="text-center">
        <?= HtmlProvider::td(["","libelle"],$affect)?>
        <td>
            <button class="btn btn-outline-primary <?=hidden(["ROLE_RP"],true)?>">Details</button>
            <a href="/detail/<?=$affect->id?>" class="btn btn-outline-success">Details</a>
            <a href="/edit/<?=$affect->id?>" class="btn btn-outline-dark">Modify</a>
            <button class="btn btn-outline-danger">Supprimer</button>
        </td>
    </tr> 
        <?php }
    ?>
</table>