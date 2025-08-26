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
if($a === 7){
    echo "\$aは7です";
} elseif ($a < 5) {
    echo "多いです";
} else {
    echo "false";
}
?>