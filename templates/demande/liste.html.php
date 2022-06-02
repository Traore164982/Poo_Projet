<?php 
    use App\Core\HtmlProvider;

use function App\Core\hidden;

    HtmlProvider::navInfo($title,"info",5,$btn,"success","/demande");
?>
<table class="container mt-5">
    <tr class="bg-info text-dark text-center">
        <th>N°</th>
        <th>Motif de Demande</th>
        <th><a href="/demande" class="btn btn-sm btn-outline-primary">+</a></th>
    </tr>
    <?php
        $i=1;
        foreach ($demandes as $demande) {
            $demande->numero=$i++;
    ?>
    <tr class="text-center">
        <?= HtmlProvider::td(["numero","motif"],$demande)?>
        <td>
            <a href="/detail/<?=$demande->id?>" class="btn btn-outline-success">Details</a>
            <a href="/edit/<?=$demande->id?>" class="btn btn-outline-dark">Modify</a>
            <button class="btn btn-outline-danger">Supprimer</button>
        </td>
    </tr> 
        <?php }
    ?>
</table>