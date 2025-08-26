<?php
require_once('functions/search_city_time.php');
$tokyo = searchCityTime('東京');
$city = htmlspecialchars()
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>world clock</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/result.css">
</head>

<body>
    <header class="header">
        <div class="header_inner">
            <a class="header_logo" href="/php02/index.php">world clock</a>
        </div>
    </header>

    <main>
        <div class="result_content">
            <div class="result-cards">
                <div class="result-card">
                    <div class="result-card_img-wrapper">
                        <img class="result-card_img" src="img/" alt="国旗">
                    </div>
                    <div class="result-card_body">
                        <p class="result-card_city"></p>
                        <p class="result=card_time"></p>
                    </div>
                </div>
                <div class="result-card">
                    <div class="result-card_img-wrapper">
                        <img class="result-card_img" src="img/" alt="国旗">
                    </div>
                    <div class="result-card_body">
                        <p class="result-card_city"></p>
                        <p class="result=card_time"></p>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

</html>