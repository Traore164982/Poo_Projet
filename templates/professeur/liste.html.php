<?php 
    use App\Core\HtmlProvider;

use function App\Core\hidden;

    HtmlProvider::navInfo($title,"info",5,$btn,"success","/addProf");
?>
<table class="container mt-5">
    <tr class="bg-info text-dark text-center">
        <th>N°</th>
        <th>Nom Complet</th>
        <th>Grade</th>
        <th>Role</th>
        <th><a href="/addProfesseur" class="btn btn-sm btn-outline-primary">+</a></th>
    </tr>
    <?php
        $i=1;
        foreach ($profs as $prof) {
            $prof->numero=$i++;
    ?>
    <tr class="text-center">
        <?= HtmlProvider::td(["numero","nom_complet","grade","role"],$prof)?>
        <td>
            <button class="btn btn-outline-primary <?=hidden(["ROLE_RP","ROLE_ETUDIANT"],true)?>">Details</button>
            <a href="/detail/<?=$prof->id?>" class="btn btn-outline-success">Details</a>
            <a href="/edit/<?=$prof->id?>" class="btn btn-outline-dark">Modify</a>
            <button class="btn btn-outline-danger">Supprimer</button>
        </td>
    </tr> 
        <?php }
    ?>
</table>