<?php

use App\Core\Constantes;
use App\Core\Role;
use App\Model\AnneeScolaire;
use App\Model\Classe;
use App\Model\Module;
use App\Model\Professeur;

use function App\Core\dd;                           

?>

<section style="background-color: #eee;">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black shadow" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-7 col-xl-5 order-2 order-lg-1">
                                <p class="text-center h2 fw-bold mb-5 mx-1 mx-md-4 mt-4">Affecter <br> Professeur/Module</p>
                                <form class="mx-1 mx-md-4" action="/affecter" method = "POST">
                                <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label col-12 text-center" for="form3Example3c">Professeur</label>
                                            <select name="prof" id="">
                                                <option value="">Selectionner un Professeur</option>
                                        <?php $profs = Professeur::findAll();
                                        foreach ($profs as $prof){
                                            ?>
                                        <option value="<?=$prof->id?>"><?=$prof->nom_complet?></option>
                                        <?php }?>
                                        </select>                                        
                                    </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label col-12 text-center" for="form3Example3c" name="module">Module</label>
                                        <?php
                                        $modules=Module::findAll();
                                     foreach ($modules as $module){
                                            ?>
                                            <input type="checkbox" name="module[]" id="" value="<?=$module->id?>">
                                            <label for="module"><?=$module->libelle?></label>
                                        <?php }?>
                                    </div>
                                    </div>
                                <div class="d-flex col-6 flex-row align-items-center mb-4">
                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                    </div>
                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <input type="submit" value="Affecter" class="btn btn-primary btn-lg">
                                        </div>
                                </form>
                            </div>
                            <div class="col-md-10 col-lg-5 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                <img src="<?=Constantes::WEB_ROOT?>./images/module1.avif" 
                                class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>