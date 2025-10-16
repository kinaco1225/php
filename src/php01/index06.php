<?php

for ($i = 1; $i <= 5; $i++ ) {
    echo $i * 2 . '<br/>';
}

$i = 0;

while($i <= 20){
    echo $i . "<br/>";
    $i += 1;
}

$count = 0;

while ($count <= 100 ){
    if ($count === 20 ){
        break;
    }
    if ($count % 3 === 0){
        $count ++;
        continue;
    }
    echo $count . "<br/>";
    $count++;

}

$num = 0;

do{
    echo "num =" . $num . "<br/>";
    $num += 1;
}while($num < 3);

$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";

for ($i = 1; $i <= 50; $i++) {
  if ($i % 15 === 0) {
    echo "FizzBuzz";
  } elseif ($i % 3 === 0) {
    echo "Fizz";
  } elseif ($i % 5 === 0) {
    echo "Buzz";
  } else {
    echo $i;
  }
}

for ($i = 1; $i <=5; $i++ ){
    for ($j = 1; $j <= 5; $j++){
        echo "●";
    }
    echo "<br/>";
}