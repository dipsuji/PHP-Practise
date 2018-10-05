<!DOCTYPE html>
<html>
<body>

<?php
$books = array
  (
  array("Japanese Book",55,28),
  array("Englese Book",35,18),
  array("Franch Book",15,8),
  array("Hindi Book",27,15)
  );
  
echo $books[0][0].": In stock: ".$books[0][1].", sold: ".$books[0][2].".<br>";
echo $books[1][0].": In stock: ".$books[1][1].", sold: ".$books[1][2].".<br>";
echo $books[2][0].": In stock: ".$books[2][1].", sold: ".$books[2][2].".<br>";
echo $books[3][0].": In stock: ".$books[3][1].", sold: ".$books[3][2].".<br>";
	
	$books = array
  (
  array("Japanese Book",55,28),
  array("Englese Book",35,18),
  array("Franch Book",15,8),
  array("Hindi Book",27,15)
  );
    
for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$books[$row][$col]."</li>";
  }
  echo "</ul>";
}
?>
?>

</body>
</html>