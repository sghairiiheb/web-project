<?PHP
include "../../entities/avis.php";
include "../../../avis/core/avisC.php";

if (isset($_POST['id']) and isset($_POST['remarque']) and isset($_POST['note']) )
{
    $id=$_POST['id'];
    $remarque=$_POST['remarque'];
    $note=$_POST['note'];
    
    $avisvar = new avis($id,$remarque,$note);
    $avisCvar= new avisC() ;
    $avisCvar->ajouterAvis($avisvar);
    echo"<script language =\"javascript\">alert(\"merci pour votre temps\");document.location.href='../front/contact.php';</script>";

}
    else{
        echo "verifier les champs";
    }

?>