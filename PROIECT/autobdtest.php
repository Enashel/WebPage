<?php


$link = mysqli_connect("localhost", "root", "");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "CREATE DATABASE proiect";
$link = mysqli_connect("localhost", "root", "", "proiect");
if($link === false){
    die("ERROR: Conexiunea nu a putut fi realizata." . mysqli_connect_error());}
$sql = "CREATE TABLE useri(
    ID INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Nume_Prenume VARCHAR(50) NOT NULL,
    Nume_Utilizator VARCHAR(50) NOT NULL,
    Parola varchar(50) NOT NULL,
    Parola_dehash VARCHAR(50) NOT NULL,
     Disciplina_Predata VARCHAR(50) NOT NULL,
      Tip_Disciplina VARCHAR(50) NOT NULL, 
       Specializare VARCHAR(50) NOT NULL, 
       An INT(1) NOT NULL, 
Interval_Disponibil VARCHAR(20) NOT NULL 
)";



$sql = "INSERT INTO proiect (Nume_Prenume, Nume_Utilizator,Parola, Parola_dehash,Disciplina_Predata,Tip_Disciplina,Specializare,An,Interval_Disponibil) VALUES (?, ?, ?, ?,?,?,?,?,?)";
if($stmt = mysqli_prepare($link, $sql)){
   
    mysqli_stmt_bind_param($stmt, "sssssssss", $NumePrenume, $Username, $Pass, $hash,$Disciplina,$TipDisciplina,$Specializare,$An,$IntervalDisp);

 $NumePrenume=$_POST['nume'];
$Username=$_POST['user'];
$Pass=$_POST['pass'];
$hash = password_hash($Pass, PASSWORD_DEFAULT);
$Disciplina=$_POST['disciplina'];
$TipDisciplina=$_POST['tipd'];
$Specializare=$_POST['specializare'];
$An=$_POST['an'];
$IntervalDisp=$_POST['interval'];

if(mysqli_stmt_execute($stmt)){
        echo "Datele au fost salvate.";
    } else{
        echo "ERROR: Nu a putut fi executat: $sql. " . mysqli_error($link);
    }
}
?>