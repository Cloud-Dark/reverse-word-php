
![enter image description here](https://i.ibb.co/ngGFBCR/image.png)

# Reverse Word in PHP  With Explode and Array

    enter code here

## cara Menggunakan
1. kalian dapat mengubah di bagian $string

    	$string = "Cloud Dark Cakep";
    	
2.  explode string untuk mendapatkan array nya

    	$teststr = explode(" ",$string);
    	
3. Setelah mendapatkan array nya anda dapat melakukan 2 tekhnik berikut 
a. Looping 


    	<?php
    	$teststr = explode(" ",$string);
    	for($i=count($teststr)-1;$i>=0;$i--){
    	echo $teststr[$i]." ";
    	}
    	?>
    	
b. cara termudah anda hanya perlu reverse array saja


    	<?php
    	$reversed = array_reverse($teststr);
    	print_r($reversed);
    	?>
    
