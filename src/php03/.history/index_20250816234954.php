<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Code Quiz</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <header class="header">
        <div class="header_inner">
            <a class="header_logo" href="/php03">
                Status Code Quiz
            </a>
        </div>
    </header>

    <main>
        <div class="quiz_content">
            <div class="question">
                <p class="question_text">Q.以下の内容にあてはまるステータスコードを選んでください。</p>
                <p class="question_text"></p>
            </div>
            <form class="quiz-form" action="result.php" method="post">
                <input type="hidden" name="answer_code" value"">
                <div class="quiz-form_item">
                    <div class="quiz-form_group">
                        <input class="quiz-form_radio" id="" type="radio" name="option" value="">
                        <label class="quiz-form_label" for=""></label>
                    </div>
                </div>
                
            </form>
        </div>
    </main>

</body>

</html>