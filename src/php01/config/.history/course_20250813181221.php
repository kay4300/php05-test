<?php
$company = htmlspecialchars($_post['company'], ENT_QUOTES);
echo "会社名は" . $company . "ですね";
?>