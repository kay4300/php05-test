<?php

require_once('config/status_codes.php');

$answer_code = htmlspecialchars($_POST['answer_code'], ENT_QUOTES);


$option = htmlspecialchars($_POST['option'], ENT_QUOTES);
$option= isset($_POST['option']) ? htmlspecialchars($_POST['option'], ENT_QUOTES) : null;
if (!$option) {
    header('Location: index.php');  
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Code Quiz</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/result.css">
</head>

<body>
    <header class="header">
        <div class="header_inner">
            <a class="header_logo" href="/">Status Code Quiz</a>
        </div>
    </header>

    <main>
        <div class="result_content">
            <div class="result">
                <h2 class="result_text--correct">正解</h2>
                <h2 class="result_text--incorrect">不正解</h2>
            </div>
            <div class="answer-table">
                <table class="answer-table_inner">
                    <tr class="answer-table_row">
                        <th class="answer-table_header">ステータスコード</th>
                        <td class="answer-table_text"></td>
                    </tr>
                    <tr class="answer-table_row">
                        <th class="answer-table_header">説明</th>
                        <td class="answer-table_text"></td>
                    </tr>
                </table>

            </div>
        </div>
    </main>

</body>

</html>