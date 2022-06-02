<?php 
    use App\Core\HtmlProvider;

use function App\Core\hidden;

    HtmlProvider::navInfo($title,"info",5,$btn,"success","/addmodule");
?>
<table class="container mt-5">
    <tr class="bg-info text-dark text-center">
        <th>N°</th>
        <th>Module</th>
        <th><a href="/addmodule" class="btn btn-sm btn-outline-primary">+</a></th>
    </tr>
    <?php
        $i=1;
        foreach ($modules as $module) {
            $module->numero=$i++;
    ?>
    <tr class="text-center">
        <?= HtmlProvider::td(["numero","libelle"],$module)?>
        <td>
            <button class="btn btn-outline-primary <?=hidden(["ROLE_RP"],true)?>">Details</button>
            <a href="/detail/<?=$module->id?>" class="btn btn-outline-success">Details</a>
            <a href="/edit/<?=$module->id?>" class="btn btn-outline-dark">Modify</a>
            <button class="btn btn-outline-danger">Supprimer</button>
        </td>
    </tr> 
        <?php }
    ?>
</table>