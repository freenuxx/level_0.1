 <?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
//atribuire variabila $titlu cu continutul ""
$titlu = "Titlu PHP";
$pt_heading = "Heading la baiatu";
$var1 = "2";
$var2 = "21";
if ($var1>$var2) {
	$temp = $var1;
	$var1 = $var2;
	$var2 = $temp;
}
$string = range('a', 'z');
$array = implode('_', $string);
?>

<!DOCTYPE html>
<html>
<head>
	 <title><?php echo $titlu ?></title>
</head>
<body>
	<a href="Structuri_de_date.php">Structuri de date</a>
	<h1><?php echo $pt_heading ?></h1>
	<h3><?php echo $array ?></h3>
	<h2>Urmatoarele numere sunt afisate de la <?php echo $var1;?> pana la <?php echo $var2;?>:</h2>
    <h2><?php for( $i = $var1; $i <= $var2; $i++ ): ?>
            <p>Aici incep numerele cu: <?php echo $i ?> </p>
            <ul> 
                <?php foreach ( $string as $j) : ?>  
		            <li><?php echo $i . '). ' . $j ?></li>
				<?php endforeach ?>	
			</ul>
		<?php endfor ?>	
		
	</h2>
	
</body>
</html>
