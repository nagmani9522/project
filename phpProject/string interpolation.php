<?php
      $num1=30;
	  echo "value is: $num1<br/><br>";//string interpolation.
	  echo "value is:",$num1,"<br>";
	  echo "$num1 is goog price";//if we write the syntax as 
	  //echo "$num1is good price"; Then it is wrong.
	  //because php understand (num1is) type no no variable decration. 
      echo "<br> <br> <br>";
	  echo "{$num1}is goog price";
	  echo "<br> <br>";
	  $name="Geeky";
	  echo "$name shows<br><br>";
	  echo"{$name}shows <br>";
	  $value=10;
	  //echo"Apple price $ten <br>";means $ten does not define.
	  echo'Apple price $ten <br>';
	  //echo"$value Apple price $ten <br>";means $value define but $ten does not define.
	  echo'$value Apple price $ten <br>';
	  echo"$value Apple price \$ten <br>";
	  echo'$value Apple price \$ten <br>';
?>