<!DOCTYPE html>
<html>
<head>
	<title>Proiect Login</title>
	<link rel="stylesheet" type="text/css" href="proiectcsslogin.css">
</head>
<body>

<script>
function validateForm() {
  var b = document.forms["formular"]["user"].value;
  if (b == "") {
    alert("Va rugam sa completati Numele de utilizator");
    return false;
}
    var c = document.forms["formular"]["pass"].value;
  if (c == "") {
    alert("Va rugam sa completati parola");
    return false;
}

}

</script>


<div id="id1">
	<form name="formular" onsubmit="return validateForm()" action="loginverificare.php" method="POST">
		<p>
		 <div class="main">
			<p style="font-family:Cursive"><label>Nume de Utilizator</label>
		
		<div class="casutatext">
			<input type="text" id="user" name="user"/>
		</p>
			</div>
</div>
		
		

<p>
		 <div class="main">
			<p style="font-family:Cursive"><label>Parola</label>
		
		<div class="casutatext">
			<input type="password" id="pass" name="pass"/>
		</p>
			</div>
</div>

		<p>
			<div class="button"><input type="submit" value="Logheaza-te"></div>
		</p>

</body>
</html>