<?php
session_start();
include("conn.php");
function ajouter_tache($nom,$description,$activite,$priorite){
    $sql="INSERT INTO Task(Nom,Desription_t,Priorite,activite) VALUES ('$nom','$description','$priorite','$activite')";
    $sqlR=mysqli_query(dbconnect(),$sql);
}
function lister_tache(){
    $sql="SELECT * FROM Task ORDER BY Priorite ASC";
    $sqlR=mysqli_query(dbconnect(),$sql);
    return $sqlR;
}
function Verify_tabTask(){
    $sql="SELECT*FROM Task";
    $sqlR=mysqli_query(dbconnect(),$sql);
    return $sqlR;
}
function id($Nom){
    $sql="SELECT idTask FROM Task WHERE Nom=".$Nom;
    $sqlR=mysqli_query(dbconnect(),$sql);
    $table=mysqli_fecth_assoc($sqlR);
    $id=$table['idTask'];
    return $id;
}
function Supprimer($id){
    $sql="DELETE FROM Task WHERE idTask=".$id;
    $sqlR=mysqli_query(dbconnect(),$sql);
}

function termine_task($id,$NomList){
    $sql="DELETE FROM Task WHERE idTask=".$id;
    $sqlR=mysqli_query(dbconnect(),$sql);

    $sql1="INSERT INTO List_d (NomList) Values ('$NomList')";
    $sqlR1=mysqli_query(dbconnect(),$sql1);
}
function aff_lisD(){

    $sql="SELECT*FROM list_d";
    $sqlR=mysqli_query(dbconnect(),$sql);
    return $sqlR;
}
function remove_list(){

$sql="DELETE FROM list_d";
$sqlR=mysqli_query(dbconnect(),$sql);
}

?>