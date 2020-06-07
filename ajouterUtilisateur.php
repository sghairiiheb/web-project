<?PHP
include "../../../avis/entities/utilisateur.php";
include "../../../avis/core/utilisateurC.php";

if (isset($_POST['idu']) and isset($_POST['email']) and isset($_POST['mdp']) )
{
    $idu=$_POST['idu'];
    $email=$_POST['email'];
    $mdp=$_POST['mdp'];
    
    $utilisateurvar = new utilisateur($idu,$email,$mdp);
    $utilisateurCvar= new utilisateurC() ;
    $utilisateurCvar->ajouterUtilisateur($utilisateurvar);
    header('Location: tables2.php');
}
    else{
        echo "verifier les champs";
    }

?>