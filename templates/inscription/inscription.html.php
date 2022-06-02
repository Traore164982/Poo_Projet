<?php

use App\Core\Constantes;
use App\Core\Role;
use App\Model\AnneeScolaire;
use App\Model\Classe;

use function App\Core\dd;                           

?>

<section style="background-color: #eee;">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black shadow" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4 text-shadow">Inscrivez-Vous</p>
                                <form class="mx-1 mx-md-4" action="/inscription" method = "POST">
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="form3Example1c">Nom Complet</label>
                                        <input type="text" id="form3Example1c" class="form-control" name = "nom"/>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="form3Example3c">Login</label>
                                        <input type="email" id="form3Example3c" class="form-control" name = "login"/>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="form3Example1c">Adresse</label>
                                        <input type="text" id="form3Example1c" class="form-control" name = "adresse"/>
                                        </div>
                                    </div>
                                    <p class="text-center fw mb-3 mx-1 mx-md-4 mt-4">Sexe</p>
                                    <div class="d-flex flex-row justify-content-evenly align-items-center mb-4 ">
                                        <div class="form-outline mb-0">
                                            <label class="form-label" for="">Masculin</label>
                                        <input type="radio" id="" name="sexe" class="form-control-radio" value = "homme"/>
                                        </div>
                                        <div class="form-outline mb-0">
                                            <label class="form-label" for="">Féminin</label>
                                        <input type="radio" id="" name="sexe" class="form-control-radio" value = "femme"/>
                                        </div>
                                    </div>
                                    <div class="d-flex col-6 flex-row align-items-center mb-4">
                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="form3Example1c">Classe</label>
                                            <select name="classe" id="">
                                                <option value="">Selectionner une Classe</option>
                                        <?php $classes = Classe::findAll();
                                        foreach ($classes as $classe){
                                            ?>
                                        <option value="<?=$classe->id?>"><?=$classe->libelle?></option>
                                        <?php }?>
                                        </select>
                                    </div>
                                    <div class="form-outline flex-fill mb-0 offset-1">
                                            <label class="form-label" for="form3Example1c">Année Scolaire</label>
                                            <select name="annee"  id="">
                                                <option value="">Selectionner une Année</option>
                                        <?php 
                                        $annees=AnneeScolaire::findAll();
                                     foreach ($annees as $annee){
                                            ?>
                                        <option value="<?=$annee->id?>"><?=$annee->libelle?></option>
                                        <?php }?>
                                        </select>
                                    </div>
                                      
                                    </div>
                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <input type="submit" value="S'inscrire" class="btn btn-primary btn-lg">
                                        </div>
                                </form>
                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                <img src="<?=Constantes::WEB_ROOT?>./images/img.avif" 
                                class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>