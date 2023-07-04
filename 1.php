
<?

print "==== try ====\n";
for($y = 1; $y < 10; $y++){
  for($x = 1; $x < 10; $x++){
    if(1 == $x || 3 == $x || 5 == $x || 7 == $x || 9 == $x){
      print "* ";
    } else ( $y == $x ); {
      print "- ";
    }
  } 
  print PHP_EOL;
}
print "\n";

# r / and / increament - de / 

print "==== soal 1 ====\n";
# b - q 1 log1
for($y = 1; $y < 10; $y++){
  for($x = 1; $x < 10; $x++){
    if($y == $x){
      echo "* ";
    } else {
      print ". ";
    }
  }
  echo PHP_EOL;
}
print "\n";

# # b - q 1 log1 -- menggunakan pengulangan seperti nomer 2
# for($y = -9; $y < 0; $y++){
#   for($x = -9; $x < 0; $x++){
#     if($y == $x){
#       echo "* ";
#     } else {
#       print ". ";
#     }
#   }
#   echo PHP_EOL;
# }
# print "\n";
# # # 
# # b - q 1 log1
# for($y = 9; $y > 0; $y--){
#   for($x = 1; $x < 10; $x++){
#     # if($y == $x){
#     if($y + $x == 10){
#       print "* ";
#     } else {
#       print ". ";
#     }
#   }
#   echo PHP_EOL;
# }
# print "\n";

print "==== soal 2 ====\n";
# b - q 2 log1
for($y = 1; $y < 10; $y++){
  for($x = 1; $x < 10; $x++){
    if($x + $y == 10){
    # if(x == y-(y-1)){  # logig added by brother fandy
      print "* ";
    } else {
      print ". ";
    }
  }
  echo PHP_EOL;
}
print "\n";

print "==== soal 3 ====\n";
# b - q 3 log1  -- logical --
for($y = 1; $y < 10; $y++){
  for($x = 1; $x < 10; $x++){
    if($y == $x || $y + $x == 10){
      print "* ";
    } else {
      print ". ";
    }
    # if($y == $x){
    #   print "* ";
    # }
    # elseif($y + $x == 10){
    #   print "* ";
    # }
    # else
    #   print ". ";
  }
print PHP_EOL;
}

print "==== soal 4 ====\n";
# b - q 4 log1
for($y = 1; $y < 10; $y++){
  for($x = 1; $x < 10; $x++){
    if($y == $x || $y + $x == 10 || $y == 5 || 5 == $x ){
      print "* ";
    }
    else
      print ". ";
  }
print PHP_EOL;
}
print "\n";

# for ($x = 0; $x < 10; $x++) {
#   for ($y = 0; $y < 10; $y++) {
#   # echo "The number is: $x <br>";
#   echo 'x ';
#   }
# } 
#   echo PHP_EOL

# print "\n";

print "==== soal 5 ====\n";
# a - q 5 log1
for($y = 1; $y < 10; $y++){
  for($x = 1; $x < 10; $x++){
    if($y >= $x){
      print "* ";
    } else { 
      print "- ";
    }
  }
  echo PHP_EOL;
}
print "\n";

# a - q 6 log1
print "==== soal 6 ====\n";
for($y = 1; $y < 10; $y++){
  for($x = 1; $x < 10; $x++){
    if($y + $x == 10){
      print "* ";
    } else { 
      print "- ";
    }
  }
  echo PHP_EOL;
}
print "\n";

# # a - q 7 log1
# print "==== soal 7 ====\n";
# for($y = 1; $y < 10; $y++){
#   for($x = 1; $x < 10; $x++){
#     if($y >= $x && $y + $x >= 10 && $y <= $x && $y + $x <= 10){
#     if($y >= $x && $y + $x >= 10 || $y <= $x && $y + $x <= 10){
#       print "* ";
#     } else { 
#         print ". ";
#     }
#   }
#   echo PHP_EOL;
# }
# print "\n";

# a - q 8 log1
print "==== soal 8 ====\n";
for($y = 1; $y < 10; $y++){
  for($x = 1; $x < 10; $x++){
    # if($y >= $x && $y + $x >= 10 || $y <= $x && $y + $x <= 10){
    # if($y <= $x && $y + $x <= 10 || $y >= $x && $y + $x >= 10){
    # if($y <= $x && $y + $x <= 10 || $y <= $x && $y + $x <= 10){
    # if($y >= $x ){
    if($y >= $x && $y + $x <=10 or $y <= $x && $y + $x >= 10){
    # if($y <= $x && $y + $x >=10){
      print "* ";
    } else { 
        print ". ";
    }
  }
  echo PHP_EOL;
}
print "\n";

# # # coba-doba
# # print "==== try ====\n";
# # for($y = 1; $y < 10; $y++){
# #   for($x = 1; $x < 10; $x++){
# #     if($y == $x){
# #       print "* ";
# #     } else { 
# #         print ". ";
# #     }
# #   }
# #   print PHP_EOL
# # } 
# 
# 
# # membuktikan bahwa x horizontal dan y vertical
# # bukti bahwa x = horizontal
# for($y = 1; $y < 10; $y++){
#   for($x = 1; $x < 10; $x++){
#     if($y == 2){
#       echo "* ";
#     } else {
#       print ". ";
#     }
#   }
#   echo PHP_EOL;
# }
# 
# # bukti bahwa y = vertical
# for($y = 1; $y < 10; $y++){
#   for($x = 1; $x < 10; $x++){
#     if($y == 2){
#       echo "* ";
#     } else {
#       print ". ";
#     }
#   }
#   echo PHP_EOL;
# }
?>
