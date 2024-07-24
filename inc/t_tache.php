<?php
include("fonction.php");


if(isset($_GET['tache']) && $_GET['tache']!=''){

$nom=$_GET['tache'];
$description=$_GET['description'];
$activite=$_GET['activite'];
$priorite=$_GET['importance'];
$request=ajouter_tache($nom,$description,$activite,$priorite);
    header('location:../pages/index.php?addSucsess');
}
if(isset($_GET['idTache'])){
     Supprimer($_GET['idTache']);
     header('location:../pages/index.php');
}

if(isset($_GET['Achieved'])&& isset($_GET['idTache'])){
    $NomList=$_GET['Achieved'];
    $id=$_GET['idTache'];
    termine_task($id,$NomList);
    header('location:../pages/index.php');
}

if(isset($_GET['drop'])){
    remove_list();
    header('location:../pages/index.php');
}

header('location:../pages/index.php?error');

?>