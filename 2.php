<?php

print "==== soal 1 ====";
print "\n";
for($y = 1; $y < 10; $y++){
  for($x = 1; $x < 10; $x++){
    if($y == $x){
      print ($y * 2 - 1);
    } else {
      print ". ";
    }
  }
  print PHP_EOL;
}
print "\n";

# # print "==== soal 2 ====";
# # print "\n";
# # $angka = 1;
# # for ($y = 1; $y < 10; $y++){
# #   for($x = 1; $x < 10; $x++){
# #     if($y + $x == 10){
# #       print ($x * 2 - 2);
# #       # print ("$angka; $angka += 2;")
# #     } else {
# #       print ". ";
# #     }
# #   }
# #   print PHP_EOL;
# # }
# # print "\n";
# # 
# # # print "==== soal 3 ====";
# # # print "\n";
# # # for ($y = 1; $y < 10; $y++){
# # #   for($x = 1; $x < 10; $x++){
# # #     if($y == $x){
# # #       # print (($y * 2 - 1) || ($x * 2 - 1));
# # #       print ($y * 2 - 1);
# # #     } 
# # #     elseif ($y + $x == 10){
# # #       print ($x * 2 - 2);
# # #     } 
# # #     else {
# # #       print ". ";
# # #     }
# # #   }
# # #   print PHP_EOL;
# # # }
# # # print "\n";
# # 
# print "==== soal 3 ====";
# print "\n";
# for ($y = 1; $y < 10; $y++){
#   for($x = 1; $x < 10; $x++){
#     if($y == $x){
#       # print (($y * 2 - 1) || ($x * 2 - 1));
#       print ($y * 2 - 1);
#     } 
#     elseif ($y + $x == 10){
#       print ($x * 2 - 2);
#     } 
#     else {
#       print ". ";
#     }
#   }
#   print PHP_EOL;
# }
# print "\n";
# 
# print "==== soal 3 hanif ====";
# print "\n";
# for ($y = 1; $y < 10; $y++){
#   for($x = 1; $x < 10; $x++){
#     if($y == $x){
#       # print (($y * 2 - 1) || ($x * 2 - 1));
#       echo ($y * 2 - 1);  # echo menggunakan kurang atau tidak sama saja, tapi nanti kalau yg di echo kompleks masih belum ditest
#     } 
#     elseif ($y + $x == 10){
#       echo ($x * 2 - 2);
#     } 
#     else {
#       echo (". ");
#     }
#   } 
#   print PHP_EOL;
# }
# print "\n";
# 
# print "==== test soal 4\n";
# for ($y = 1; $y < 10; $y++){
#   for ($x = 1; $x < 10; $x++){
#     if ($x == 5){
#       print ("$y " * 2 - 1);  # vertical
#     }
#     elseif($y == 5){
#       # print ($y);
#       print ("$x " * 2 - 2); # horizontal
#       print "  ";
#     }
#     else {
#       print " . ";
#     }
#   }
#   print PHP_EOL;
# }
# print "\n";

print "==== test soal 5\n";
for ($y = 1; $y < 10; $y++){
  for ($x = 1; $x < 10; $x++){
    if ($y >= $x){
      echo ($x * 2 - 1);
      echo " ";
    } else {
      echo " ";
    }
  }
  print PHP_EOL;
}
print "\n";

print "==== test soal 6\n";
# 1 = 2n + ( 2n -1 )
# 1 = 2n + (2n -1) -> 3 7 11 15 19
# 2n + (4(n-1)) -> 2 8 14 20 26
for ($y = 1; $y < 10; $y++){
  for ($x = 1; $x < 10; $x++){
    if ($y <= $x){
      echo ($y + $x == 10);
    } else {
      echo " ";
    }
  }
  print PHP_EOL;
}
print "\n";

print "==== test soal 7\n";
for ($y = 1; $y < 10; $y++){
  for ($x = 1; $x < 10; $x++){
    if ($y == $x){
      print ($y * 2 - 1);
      print " ";
    } elseif ($y + $x == 10){
      print ($x * 2 - 2);
      print " ";
    } elseif ($y + $x <= 10 && $y < $x){
      print "A";
      print " ";
    } elseif ($y + $x >= 10 && $y > $x){
      print "B";
      print " ";
    } else {
      print "  ";
    }
  }
  print PHP_EOL;
}
print "\n";

print "==== test soal 8\n";
for ($y = 1; $y < 10; $y++){
  for ($x = 1; $x < 10; $x++){
    if ($y == $x){
      print ($x * 2 - 1);
    } elseif ($x < $y && $x + $y < 10){
      print "A";
    } elseif ($y + $x > 10 && $x > $ y){
      print "B";
    } else {
      print " ";
    }
  }
  print PHP_EOL;
}
print "\n";
?>
