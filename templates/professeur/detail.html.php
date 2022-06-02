<?php
var_dump($profmodule);
use App\Core\HtmlProvider;
HtmlProvider::navInfo($title,"info",5,$btn,"success","/listeprofesseur");
?>

<div class="container mt-2">
<div class="card border-primary mb-3">
        <div class="card-header bg-info">
            <div class="row ">
                <h4 class="card-title col-11">Informations Personnelles</h4>
                <button class="btn btn-success btn-sm float-end col-1" id="btn-add-module">+</button>
            </div>
        </div>
            <div class="card-body">
                <ul>
                    <li>Nom Complet : <?=$prof->nom_complet?></li>
                    <li>Grade : <?=$prof->grade?></li>
                    <li>Dispense des Cours depuis : </li>
                </ul>
            </div>
    </div>
    <div class="card border-primary mb-3">
        <div class="card-header bg-info">
            <div class="row ">
                <h4 class="card-title col-11">Modules</h4>
                <button class="btn btn-success btn-sm float-end col-1" id="btn-add-module">+</button>
            </div>
        </div>
            <div class="card-body">
                <div class="card col-10 offset-1">
                    <div class="card-header bg-primary">
                        <div class="card-title text-white">
                            <div class="row">
                                <h4 class="card-title col-11">Nouvelles Modules</h4>
                                <button class="btn btn-success btn-sm float-end col-1">Save</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row text-center">
                            <?php
                                foreach ($module as $modul) {?>
                                    <div class="col-sm-3">
                                        <input type="checkbox" name="module[]" id="<?=$modul->libelle?>">
                                        <label for="<?= $modul->id ?>"><?= $modul->libelle?></label>
                                    </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="card border-primary mb-3">
        <div class="card-header bg-info">
            <div class="row ">
                <h4 class="card-title col-11">Classes</h4>
                <button class="btn btn-success btn-sm float-end col-1" id="btn-add-module">+</button>
            </div>
        </div>
            <div class="card-body">
                <div class="card col-10 offset-1">
                    <div class="card-header bg-primary">
                        <div class="card-title text-white">
                            <div class="row">
                                <h4 class="card-title col-11">Nouvelles Modules</h4>
                                <button class="btn btn-success btn-sm float-end col-1">Save</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row text-center">

                        </div>
                    </div>
                </div>
            </div>
    </div>

</div>