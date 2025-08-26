<?php
$company = htmlspecialchars($_post['company'], ENT_QUOTES);
print "会社名は" . $company . "ですね";
?>