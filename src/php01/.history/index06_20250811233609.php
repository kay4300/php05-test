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
    if ($count == 3) {
        $count++;
        continue;
    }
    
}
