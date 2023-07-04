
<?php

# S
for($y = 1; $y < 10; $y++){
  for($x = 1; $x < 10; $x++){
    if($y == 1 && $y <= 5 || $y == 5 || $x == 9 && $y >= 5 || $y == 9){
    # if($y == 1 && $y >= 5 || $y == 5 || $y == 9){  #||  $x >= 5 && $x + $y == 10){
      print "* ";
    } elseif ($x == 1 && $y <= 5){
    # if($y == 1 && $y >= 5 || $y == 5 || $y == 9){  #||  $x >= 5 && $x + $y == 10){
      print ("* ");
    }
      else {
      print "  ";
    }
  }
  print PHP_EOL;
}
print "\n";

# Y
for($y = 1; $y < 10; $y++){
  for($x = 1; $x < 10; $x++){
    if($x == 5 && $y >= 5 || $y == $x && $y <= 5 || $y + $x == 10 && $y <= 5){
      print "* ";
    } else {
      print "  ";
    }
  }
  print PHP_EOL;
}
print "\n";

# I
for($y = 1; $y < 10; $y++){
  for($x = 1; $x < 10; $x++){
    if($x == 5 ){
      print "* ";
    } else {
      print "  ";
    }
  }
  print PHP_EOL;
}
print "\n";

# F
for($y = 1; $y < 10; $y++){
  for($x = 1; $x < 10; $x++){
    if($y == 1 || $y == 5 || $x == 1){
      print "* ";
    } else {
      print "  ";
    }
  }
  print PHP_EOL;
}
print "\n";

# A
for($y = 1; $y < 10; $y++){
  for($x = 1; $x < 10; $x++){
    if($y == 1 || $y == 5 || $x == 1 || $x == 9){
      print "* ";
    } else {
      print "  ";
    }
  }
  print PHP_EOL;
}
print "\n";

?>
