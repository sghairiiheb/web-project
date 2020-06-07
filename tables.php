<?php
//include "../../core/config.php";
session_start();
?>
<?php if (ISSET($_SESSION['email']) && ISSET($_SESSION['mdp'])) { 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
        <?PHP 
        include "../../core/avisC.php";
        $avisCvar =new avisC();
        $listeAviss=$avisCvar->afficherAviss();
        ?>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">Start Bootstrap</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            ><!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a><a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../../core/logout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                                ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Gestions des avis
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" style="font-size: 13px;" href="tables.php">Afficahge des avis</a><a class="nav-link" style="font-size: 13px;" href="index.html">Ajouts des avis</a></nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts2"
                                ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Gestions des utilisateurs
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" style="font-size: 13px;" href="tables2.php">Afficahge des utilisateurs</a><a class="nav-link" style="font-size: 13px;" href="index2.html">Ajouts des utilisateurs</a></nav>
                            </div>
                            
                            
                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index2.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                                <form method="GET" >
                                <div class="col-lg-12">
                                <table><tr>
                                <td>
                                <input class="form-control" type="text" name="idd" placeholder="Rechercher par identifiant" >
                                </td>
                                <td>
                                <input type="submit"  name="but8" value="Rechercher " class="btn btn-primary" >
                                </td>
                                <td>
                                <input type="submit"  name="but9" value="tri " class="btn btn-primary" >
                                </td>
                                </tr></table>   
                                </div>
                                </form>

<center>




                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="table-responsive" id="source0">
                                    <table class="table table-bordered"  width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <td>reamarque</td>
                                                <td>note</td>
                                                <td>supprimer</td>
                                                <td>modifier</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?PHP
$avisCvar =new avisC();
if (isset($_GET['but8'])) 
{   
 if (empty($_GET['idd'])){
    $avisCvar =new avisC();
    $listeAviss=$avisCvar->afficherAviss();
 }
 else {
 $idd= $_GET['idd'];
 $avisCvar2 =new avisC();
$listeAviss=$avisCvar2->afficherAviss2($idd);
 }
}
else 
$listeAviss=$avisCvar->afficherAviss();
if (isset($_GET['but9']))
{   
    $avisCvar =new avisC();
 $listeAviss=$avisCvar->afficherAviss3();}
?>
<?PHP
foreach($listeAviss as $row){
    ?>
    <tr>
    <td><?PHP echo $row['id']; ?></td>
    <td><?PHP echo $row['remarque']; ?></td>
    <td><?PHP echo $row['note']; ?></td>
    <td><form method="POST" action="supprimerAvis.php">
    <input type="submit" name="supprimer" value="supprimer" class="btn btn-danger">
    <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
    
    </form>
    </td>
    
    
    
    <td><a href="modifierAvis.php?id=<?PHP echo $row['id']; ?>" class="btn btn-warning" style="color: #FFF;">
    Modifier</a></td>
    </tr>
    
    <?PHP
}
?>     
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2019</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html> }
<?php } else {?>



    <?php
    echo"<script language =\"javascript\">alert(\"Vous devez s'authentifier\");document.location.href='../../views/back/login.php';</script>";


} ?>