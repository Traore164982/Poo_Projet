<?php
namespace App\Controller;

use App\Core\Controller;
use App\Model\Etudiant;
use App\Model\Inscription;

use function App\Core\dd;

class InscriptionController extends Controller{
    
    public function inscription(){
        if ($this->request->isGet()) {
            $this->render('inscription/inscription');
        }else{
            extract($_POST);
            $etudiant = new Etudiant;
            $etudiant->setNomComplet($nom);
            $etudiant->setlogin($login);
            $etudiant->setPassword("passer");
            $etudiant->setRole(Etudiant::getRole());
            $etudiant->setSexe($sexe);
            $etudiant->setAdresse($adresse);
            $id = $etudiant->insert();
            if($id>0){
                $inscription = new Inscription();
                $inscription->setAc_id($_SESSION['user-connect'][0]->id);
                $inscription->setEtudiant_id($id);
                $inscription->setClasse_id($classe);
                $inscription->setAnneescolaire_id($annee);
                $inscription->insert();
                $matricule="Mat".date("dmYhis");
                $etudiant->setMatricule($matricule);
                $etudiant->setId($id);
                $etudiant->update();
                $this->redirectToRoute('login');
            }else{
                die("erreur");
            }
        }
    }
}