<!DOCTYPE HTML html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Lab 9</title>
		<link rel="stylesheet" href="css/lab9.css"/>
		<link rel="stylesheet" href="css/firefox.css" />
		<link href="currencycalc.php" />
<div class="page">
		<script>
		function validateForm() {
		  var x = document.forms["calculadore"]["usdollar"].value;
		  if (x == "") {
			alert("Your input must be a number!");
			return false;
		  }
		}
		</script>
		<script>
		function loadDoc() {
		var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
		document.getElementById("demo").innerHTML =
		this.responseText;
		}
		};
		xhttp.open("GET", "curencycalc.php", true);
		xhttp.send();
		}
		</script>
	</head>
	
	<div class="page">	
	<body>	
		<div class="title">
		<h1>Currency Converter</h1>
		</div>
		<br>
		
			<h2>
				This simple calculator while convert your US Dollars to British pounds at an exchange rate of ($1 = .73 British Pounds).
			</h2>
			<div id="demo">
					<form name="calculadore" method="post" action="index.php">  
					US Dollars: <input type="number" name="usdollar" required>  
				  <br><br>
				  <br><br>
				  <input type="submit" name="submit" value="Submit" onclick="loadDoc()">  
				</form>
		<?php include 'currencycalc.php'; ?>
			</div>
	</div>

	
	
	
	
	
	</body>
	<footer id="footer">
<?php include ("footer.inc") ?>
	</footer>
</html>