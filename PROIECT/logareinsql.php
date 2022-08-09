<?php


$hostname="localhost";
$user="root";
$bd="proiect";
$parola="";

$conexiune=mysqli_connect($hostname,$user,$parola,$bd)
or die("Conexiune esuata");

if(isset($_POST) & !empty($_POST))
{
  $username=mysqli_real_escape_string($conexiune,$_POST['user']);
  $sql="SELECT * FROM useri WHERE Nume_Utilizator='$username'";
  $result=mysqli_query($conexiune,$sql);
  $count=mysqli_num_rows($result);
  if($count>0)
  {
    echo("<script>alert('User existent va rugam sa schimbati informatiile de logare sau sa va logati cu userul existent!')</script>");
    echo("<script>window.location = '../index.php';</script>");
  }
  else
  {
   

if (!isset($_SESSION['user'])) {
    header("index.php");

$DB_SERVER = 'localhost';
$DB_USERNAME = 'root';
$DB_PASSWORD = '';
$DB_DATABASE = 'proiect';
$sesiune = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE);


if (!$sesiune) {
    die("Conexiune la baza de date esuata " . mysqli_connect_error());
}

$NumePrenume=$_POST['nume'];
$Username=$_POST['user'];
$Pass=$_POST['pass'];
$hash = password_hash($Pass, PASSWORD_DEFAULT);
$Disciplina=$_POST['disciplina'];
$TipDisciplina=$_POST['tipd'];
$Specializare=$_POST['specializare'];
$An=$_POST['an'];
$IntervalDisp=$_POST['interval'];

$sql = "INSERT INTO useri (Nume_Prenume,Nume_Utilizator,Parola,Parola_dehash,Disciplina_Predata,Tip_Disciplina,Specializare,An,Interval_Disponibil) VALUES ('$NumePrenume','$Username','$hash','$Pass','$Disciplina','$TipDisciplina','$Specializare','$An','$IntervalDisp')";

if(!mysqli_query($sesiune,$sql))
{
	echo 'Nu a fost inserat in baza de date';
}
else
{
   header('Location: login.php');
}
}
}
}
?>