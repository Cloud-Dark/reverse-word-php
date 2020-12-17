<?php
	$string = "Mas Syahdan Filsafan";
	$teststr = explode(" ",$string);

 	$reversed = array_reverse($teststr);


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
<span> String anda adalah : <b> <?php echo "$string"; ?></b></span> <br>
<span>Hasil Reverse Word dengan tekhnik looping : <b>
<?php $teststr = explode(" ",$string);

for($i=count($teststr)-1;$i>=0;$i--){
echo $teststr[$i]." ";
}
 ?>
</b></span> <hr>
<span> Cetak Array hasil Explode <br> <?php print_r($teststr); ?></span><hr>
<span>Hasil Reverse Word dengan tehnik Explode dan Array_reverse : <br> <?php	print_r($reversed); ?></span>
	</body>
</html>
