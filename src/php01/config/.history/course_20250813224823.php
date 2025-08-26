<?php
$company = htmlspecialchars($_POST['company'], ENT_QUOTES);
print "会社名は" . $company . "ですね";
?>

<?php
$company = htmlspecialchars($_['company'], ENT_QUOTES);
print "会社名は" . $company . "ですね";
?>
