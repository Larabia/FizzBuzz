<?php

$count = 1;

//solution with while/if

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


//solution with for/foreach

$output = [];

for ($i = 1; $i <= 100; $i++){

  if($i % 15 === 0){
    array_push($output, "FizzBuzz");

  } elseif ($i % 5 === 0){
    array_push($output, "Buzz");

  } elseif ($i % 3 === 0){
    array_push($output, "Fizz");
  
  } else {
    array_push($output, $i);
  }

}

foreach ($output as $value) {
  echo $value . "\n";
}


//extra tasks
foreach ($output as $value) {

  if($value === "Fizz"){
    continue;
  } elseif($value === "FizzBuzz"){
    break;
  } else {
  echo $value . "\n";
  }
}

