<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>		


<form action="">
Введите число:<input type="number" name="x">
<input type="submit">
</form>
<?php 
   $a = $_GET['x'];
   $b = 1; // переменная 1
   $c = 1; // переменная 2


    while (true) {
   		if ($b > $a) {
   		    echo "Задуманное число не входит в числовой ряд!";
      	    break;
    	}

		if ($a >= $b) {
      		if ($a == $b) {
        	 echo "Задуманное число входит в числовой ряд!";
       		  break;
    	}
     		elseif ($a != $b) {
        		$d = $b;
         		$b = $b + $c;
         		$c = $d;
      		}
   		}
    }
?>
</body>
</html>
