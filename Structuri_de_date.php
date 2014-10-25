<?php
$nr = 10;
$nume = "Vali";
$obiecte = array("impushca"=>"pushca", "batem"=>"cureaua", "sexy"=>"jarteaua");
?>

<!DOCTYPE html>
<html>
<head>
	 <title></title>
</head>
<body>
	<form action="http://site1.com/Structuri_de_date.php" method="get">
		Introdu actiunea ca sa-ti dau unealta:<br>
		<input type="text" name="input"><br>
		<input type="submit">
	</form>

	<p><?php
		if (!empty($_GET)){
			if (isset ($obiecte[$_GET["input"]])) {
				echo($obiecte[$_GET["input"]]) . '</ br>';
			} else {
				echo "nu am gasit";
			}
		}
		?>
	</p>
</body>
</html>
