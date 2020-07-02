<?php
require_once "post_data.php";

class ManageUser extends bdd
{

    public function addUser($nom,$prenom,$ville,$genre,$mdp,$mail,$date_naissance,$nom_loisir)
    {
        
        try {
            $bdd = $this->PDOConnexion();
            $requete_fiche_membre = "INSERT INTO fiche_membre(
                                            nom,
                                            prenom,
                                            ville,
                                            genre,
                                            mail,
                                            mot_de_passe,
                                            date_naissance,
                                            date_inscription
                                        ) VALUES(
                                            :nom, 
                                            :prenom,
                                            :ville,
                                            :genre,
                                            :mail,
                                            :mdp,
                                            :date_naissance,
                                            now()
                                        );";



            $result_fiche_membre = $bdd->prepare($requete_fiche_membre);
            $result_fiche_membre->bindParam(':nom', $nom, PDO::PARAM_STR);
            $result_fiche_membre->bindParam(':prenom', $prenom, PDO::PARAM_STR);
            $result_fiche_membre->bindParam(':ville', $ville, PDO::PARAM_STR);
            $result_fiche_membre->bindParam(':genre', $genre, PDO::PARAM_STR);
            $result_fiche_membre->bindParam(':mail', $mail, PDO::PARAM_STR);
            $result_fiche_membre->bindParam(':mdp', $mdp, PDO::PARAM_STR);
            $result_fiche_membre->bindParam(':date_naissance', $date_naissance, PDO::PARAM_STR);
            $result_fiche_membre->execute();
           
           
            $bdd = $this->PDOConnexion();
            $requete_fiche_loisir = "INSERT INTO fiche_loisir (
                nom_loisir
                ) VALUES (
                :nom_loisir
                );";
            $result_fiche_loisir = $bdd->prepare($requete_fiche_loisir);
            $result_fiche_loisir->bindParam(':nom_loisir', $nom_loisir, PDO::PARAM_STR);
            $result_fiche_loisir->execute();
           
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

        public function mailModel($mail){
            try{
        $bdd = $this->PDOConnexion();
        $mail_double = "SELECT mail FROM fiche_membre WHERE mail = :mail";
        $result_mail_double = $bdd->prepare($mail_double);
        $result_mail_double->bindParam(':mail',$mail, PDO::PARAM_STR);
        $result_mail_double->execute();
        
        return $result_mail_double;
            }
            catch (PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }
        public function CoUser($mail,$mdp){
        
                try{
                $bdd = $this->PDOConnexion();
                $connexion = "SELECT * FROM fiche_membre WHERE mail = :mail AND mot_de_passe = :mdp AND etat != 0";
                $result_connexion = $bdd->prepare($connexion);
                $result_connexion->bindParam(':mail',$mail, PDO::PARAM_STR);
                $result_connexion->bindParam(':mdp',$mdp, PDO::PARAM_STR);
                $result_connexion->execute();
                return $result_connexion->fetch();
                        
            }
            catch (PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }

    public function InfoUser($mail){
        try{
            $bdd = $this->PDOConnexion();
            $info = "SELECT * FROM fiche_membre WHERE mail = :mail";
            $info_result = $bdd->prepare($info);
            $info_result->bindParam(':mail',$mail,PDO::PARAM_STR);
            $info_result->execute();
            return $info_result->fetch();
            
        }
        catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
        }
    public function EtatUser($mail){
        try{
            $bdd = $this->PDOConnexion();
            $delete = "UPDATE fiche_membre SET etat = 0 WHERE mail = :mail";
            $delete_result = $bdd->prepare($delete);
            $delete_result->bindParam(':mail',$mail,PDO::PARAM_STR);
            return $delete_result->execute();
        }
        catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
        }
    public function ModifMail($mail,$session){
        try {
            $bdd = $this->PDOConnexion();
            $modif_mail = "UPDATE fiche_membre SET mail = :new_mail WHERE mail = :mail";
            $result_modif_mail = $bdd->prepare($modif_mail);
            $result_modif_mail->bindParam(':new_mail',$mail,PDO::PARAM_STR);
            $result_modif_mail->bindParam(':mail',$session,PDO::PARAM_STR);
            return $result_modif_mail->execute();
        }
        catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
        }
    public function ModifMdp($mdp,$session){
        try{
            $bdd = $this->PDOConnexion();
            $modif_mdp = "UPDATE fiche_membre SET mot_de_passe = :mdp WHERE mail = :mail";
            $result_modif_mdp = $bdd->prepare($modif_mdp);
            $result_modif_mdp->bindParam(':mdp',$mdp,PDO::PARAM_STR);
            $result_modif_mdp->bindParam(':mail',$session,PDO::PARAM_STR);
            return $result_modif_mdp->execute();
        }
        catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
            
        }
    }