<?php
{
	session_start();

	$host="localhost";
	$user="root";
	$pass="";
	$bd="proiect";

	$verif=mysqli_connect($host,$user,$pass,$bd);

$user1=$_POST['user'];
$parola=$_POST['pass'];

	$query="SELECT * FROM useri where Nume_Utilizator='$user1' AND Parola_dehash='$parola'";

	$result=mysqli_query($verif,$query);
	if(mysqli_num_rows($result)==1)
	{   
		
		$_SESSION['user']=$user1;
		$_SESSION['proiect']='true';

		
		header('location:redirectpage.php');

		
		
	}
	else
	{
		$message = "Nume sau Parola gresita!";
		
 echo("<script>alert('$message')</script>");
 echo("<script>window.location = 'login.php';</script>");
		
	}
}
?>