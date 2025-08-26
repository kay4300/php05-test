<?php
for ($i = 0; $i <= 4; $i++) {
    echo $i;
}
?>
<?php
for ($i = 2; $i <= 10; $i += 2) {
    echo $i;
}
?>

<?php
$i = 0;
while ($i < 3) {
    echo '$i = ' . $i . '<br />';
    $i += 1;
}
?>

<?php
$i = 0;
while ($i < 20) {
    $i += 1;
    echo $i . '<br />';
}
?>

<?php
$count = 0;
while ($count <= 100) {
    if ($count % 3 === 0) {
        $count++;
        continue;
    }
    if ($count === 20) {
        break;
    }
    echo $count . '<br />';
    $count++;
}
?>

<?php
$num = 0;
do {
    echo $num . '<br />';
    $num++;
} while ($num <3);
?>

<?php
$i = 1;
for $