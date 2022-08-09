<!DOCTYPE html>
<html>
<head>
	<title>Bun venit!</title>
	<link href="phpcss.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="redirect.css">
</head>
<body>
 <div class="scris"><h1><b>Bun venit!</b></h1></div><br><br>

 <div class="scris"><h1><b>Acestea sunt datele dumneavoastra:</h1></div>



 />>;
 <?php

  session_start();


 $hostname="localhost";
$user="root";
$bd="proiect";
$parola="";

$conexiune=mysqli_connect($hostname,$user,$parola,$bd)
or die("Conexiune esuata");

  $selsql = "SELECT Nume_Prenume,Disciplina_Predata,Tip_Disciplina,Specializare,An,Interval_Disponibil FROM useri WHERE Nume_Utilizator = '".$_SESSION['user']."'";

 
  $rs = mysqli_query($conexiune, $selsql);

  while($row = mysqli_fetch_array($rs))
  {
    
    echo "<div class='css'><h3>Numele dumneavoastra: ", $row['Nume_Prenume'] . "</h3></div>";
    echo "<div class='css'><h3>Disciplina Predata: ", $row['Disciplina_Predata'] ." </h3></div>";
    echo "<div class='css'><h3>Tipul Disciplinei: ", $row['Tip_Disciplina'] . "</h3></div>";
    echo "<div class='css'><h3>Specializarea ", $row['Specializare'] . "</h3></div>";
    echo "<div class='css'><h3>Anul: ", $row['An'] . "</h3></div>";
    echo "<div class='css'><h3>Intervalul Disponibil: ", $row['Interval_Disponibil'] . "</h3></div>";

  }

 
  mysqli_close($conexiune);

  ?>
  <br>
  <br>
<input type="button" value="Delogare" class="homebutton" id="btnindex" onClick="document.location.href='login.php'"> 





</body>
</html>