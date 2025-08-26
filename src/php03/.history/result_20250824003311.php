<?php
ob_start();
require_once('config/status_codes.php');

// isset()を使う理由ースーパーグローバル変数（$_POST, $_GET, $_SESSION など）に存在しないキーを直接参照しようとすると、「未定義の変数（Undefined index）」という警告が出ます。isset() を使うことで、「そのキーが存在しているかどうか」を確認してから使うことができます。存在しない場合は処理をスキップできるので、安全で安定したコードになります。- ユーザーからの入力が含まれるため、必ずバリデーションやサニタイズ処理（例：htmlspecialchars()）を行う
// $answer_code = htmlspecialchars($_POST['answer_code'], ENT_QUOTES);
$answer_code = isset($_POST['answer_code']) ? htmlspecialchars($_POST['answer_code'], ENT_QUOTES) : null;

// $option = htmlspecialchars($_POST['option'], ENT_QUOTES);
$option = isset($_POST['option']) ? htmlspecialchars($_POST['option'], ENT_QUOTES) : null;
// if (!$option) {
// header('Location: index.php');
// exit();
if (empty($option)) {
    header('Location: index.php');
    exit;
}
ob_end_flush();

// 初期化（条件に一致しなかった場合にエラーが出ないように変数に初期値を設定しておく
$code = null;
$description = null;
$result = false;


 // 送信された回答のデータから配列を探し出し、if文を使用し回答コードと配列が一致したときのみ必要となるデータを取得する
foreach ($status_codes as $status_code) {
    if ($status_code['code'] === $answer_code) {
        $code = $status_code['code'];
        $description = $status_code['description'];
        $result = $option === $code;
        // 条件に一致したらループを抜ける
        break;

    }
    
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
                <?php if ($result): ?>
                <h2 class="result__text--correct">正解</h2>
                <?php else: ?>
                <h2 class="result__text--incorrect">不正解</h2>
                <?php endif; ?>
            </div>
            <div class="answer-table">
                <table class="answer-table__inner">
                    <tr class="answer-table__row">
                        <th class="answer-table__header">ステータスコード</th>
                        <td class="answer-table__text"></td>
                        <?php echo $code ?>
                    </tr>
                    <tr class="answer-table__row">
                        <th class="answer-table__header">説明</th>
                        <td class="answer-table__text"></td>
                        <?Php echo $description ?>
                    </tr>
                </table>

            </div>
        </div>
    </main>

</body>

</html>