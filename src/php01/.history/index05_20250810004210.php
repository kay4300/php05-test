<?php
$a = 5;
if($a === 5){
    echo "\$aは5です";
}else{
    echo "";
}
?>

<?php
$a = 7;
if($a === 5){
    echo "";
}else{
    echo "\$aは5以外です";
}
?>

<?php
$a = 7;
if ($a === 8){
    echo "\$aは7です";
} elseif ($a < 10) {
    echo "少ないです";
} else {
    echo "false";
}
?>

<?php
$people = "saburo";
switch ($people) {
    case "jiro";
    echo "次郎です";
    break;
    case ($a === "saburo");
    echo "三郎です";
    break;
    default:
    echo "だれもいません";
    break;
}
?>