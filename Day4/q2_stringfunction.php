<html>
<body>

<form action="q2_stringfunction.php" method="post" enctype="multipart/form-data">
  
Enter a String :<input type="text" name="string" >
  <input type="submit" value="enter" name="submit">
</form>

</body>
</html>


<?php

@$string = $_POST['string'];
//number of character in string
$length = strlen($string);
echo " length = $length";
echo "<br>";

//breaking string into an array
$exparray = explode(" ",$string);
print_r (explode(" ",$string));
echo "<br>";

//reverse string 
$reverse = strrev("$string");
echo "revese = $reverse";
echo "<br>";

//lower case form 
$lowercase=strtolower($string);
echo "lowercase = $lowercase";
echo "<br>";

//upper case form
$uppercase = strtoupper($string);
echo "uppercase = $uppercase";
echo "<br>";

$replace = substr_replace($string,"Rawat",11,13);
echo "result = $replace ";
?>

