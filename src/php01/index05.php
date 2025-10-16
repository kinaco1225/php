<?php
$a = 7;

if ($a === 5) {
    echo "\$aは5です";
}elseif ($a === 7 ){
    echo "\$aは7です";
}else {
    echo "\$aは5以上です";
}

echo "<br/>";

$prople = "Saburo";

switch ($prople) {
    case "Saburo";
        echo "三郎です";
        echo "<br/>";
    break;
}

$a = 7;

$result = ($a === 5) ? "TRUE" : "FALSE";
echo $result;