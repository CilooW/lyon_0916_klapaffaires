<?php
/**
 * Created by PhpStorm.
 * User: apprenti
 * Date: 10/10/16
 * Time: 15:11
 */

include ("bdd.php");

if(!empty($_POST['Nom']) && !empty($_POST['Prenom']) && !empty($_POST['Email']) && !empty($_POST['Societe']) && !empty($_POST['Message'])) {

    $sql = "INSERT INTO formulaire(Nom, Prenom, Email, Societe, Message) VALUES ('$_POST[Nom]','$_POST[Prenom]','$_POST[Email]','$_POST[Societe]','$_POST[Message]')";
    $con = getConnexion();
    $result = execSql($con, $sql);

    header('location: ../public/formulaire.php');
}
