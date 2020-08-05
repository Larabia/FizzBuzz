<?php

$count = 1;

while ($count<101){

  if($count % 15 === 0){
    echo "FizzBuzz"."\n";

  } elseif ($count % 5 === 0){
    echo "Buzz"."\n";

  } elseif ($count % 3 === 0){
    echo "Fizz"."\n";
  
  } else {
    echo $count."\n";
  }
 
  $count++;

}
