<!DOCTYPE html>
<html>
<head>
	<title>Proiect</title>
	<link rel="stylesheet" type="text/css" href="PROIECT/proiectcss.css">
</head>
<body>

<script>
function validateForm() {

  var a = document.forms["formular"]["nume"].value;
  if (a == "") 
  {
    alert("Va rugam sa completati Numele");
    return false;
  }
  var b = document.forms["formular"]["user"].value;
  if (b == "") {
    alert("Va rugam sa completati Numele de utilizator");
    return false;
}
    var c = document.forms["formular"]["pass"].value;
  if (c == "") {
    alert("Va rugam sa completati Parola");
    return false;
}
    var d = document.forms["formular"]["disciplina"].value;
  if (d == "") {
    alert("Va rugam sa completati Disciplina");
    return false;
}
 var g = document.forms["formular"]["tipd"].value;
  if (g == "") {
    alert("Va rugam sa completati Tipul Disciplinei");
    return false;
}
    var e = document.forms["formular"]["specializare"].value;
  if (e == "") {
    alert("Va rugam sa completati Specializarea");
    return false;
}
    var f = document.forms["formular"]["an"].value;
  if (f == "") {
    alert("Va rugam sa completati Anul");
    return false;
}
    var h = document.forms["formular"]["interval"].value;
  if (h == "") {
    alert("Va rugam sa completati Intervalul Disponibil");
    return false;
}

}

</script>


<div id="id1">
	<form name="formular" onsubmit="return validateForm()" action="PROIECT/logareinsql.php" method="POST">
		<p>
		 <div class="main">
			<p style="font-family:Cursive"><label>Nume Prenume:</label>
		
		<div class="casutatext">
			<input type="text" id="nume" name="nume"/>
		</p>
		</div>
		</div>
		
		
		<p>
		 <div class="main">
			<p style="font-family:Cursive"><label>Nume de Utilizator:</label>
		
		<div class="casutatext">
			<input type="text" id="user" name="user"/>
		</p>
			</div>
</div>
		
		

<p>
		 <div class="main">
			<p style="font-family:Cursive"><label>Parola:</label>
		
		<div class="casutatext">
			<input type="password" id="pass" name="pass"/>
		</p>
			</div>
</div>


		<p> <div class="main">

			<p style="font-family:Cursive"><label>Disciplina predata:</label>
			<div class="casutatext">
			<input type="text" id="disciplina" name="disciplina"/>
		</p>
		</div>
		</div>

        <p>
        	
        	
			<p style="font-family:Cursive"><label>Tip Disciplina:</label>
				<br>
			
			 <select name="tipd" id="tipd" style="width:220px">
			 	<option disabled selected value> -- Alege o optiune -- </option>
                        <option>Curs</option>>
                        <option>Seminar</option>>
                        <option>Laborator</option>>
                        <option>Proiect</option>>
                    </select>
		<p>
			
			<p style="font-family:Cursive"><label>Specializare:</label>
			<input type="text" id="specializare" name="specializare"/>
		</p>
		<p>
			
			
			<label>An:</label>
			<input type="number" id="an" name="an" min="1" max="7" maxlength="1" />
		</p>
		<p>
			<p style="font-family:Cursive"><label>Interval disponibil:</label>
				<div class="optiune">
			<select name="interval" id="interval" style="width:220px">
				        <option disabled selected value> -- Alege o optiune -- </option>
                        <option>8:00-16:00</option>>
                        <option>10:00-18:00</option>>
                        <option>12:00-20:00</option>>
                        <option>Nespecificat</option>>
                    </select>
		</p>
		<p>
			<div class="button"><input type="submit" name="inregistrare" value="Inregistreaza-te"></div>
		</p>

</body>
</html>