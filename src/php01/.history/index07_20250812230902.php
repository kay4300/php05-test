<!-- 関数 -->
<?php
function text($number1,$number2)
{
    $value = $number1 + $number2;
    return $value;
}
$total = text(2, 3);
echo $total;
?>

<?php
function number($score1, $score2, $score3)
{
    $total = $score1 + $score2 + $score3;
    return $total;
}
$total = number(10, 50, 80);
if ($total > 210){
    echo "合格点は〇〇なので合格です";
}else {
    echo "合格点は〇〇なので不合格です";
}
?>
<?php
function square 