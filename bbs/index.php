<?php
    echo $_POST["username"];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>256ch</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="title">256ch</h1>
    <hr>
    <div class="boardWrapper">
        <section>
            <article>
                <div class="wrapper">
                    <div class="nameArea">
                        <span>名前:</span>
                        <p class="username">256daisuke</p>
                        <time>:2022/10/17</time>
                    </div>
                    <p class="comment">hello world</p>
                </div>
            </article>
        </section>
        <form class="formWrapper">
            <div>
                <input type="submit" value="書き込む">
                <label for="">名前:</label>
                <input type="text" name="username">
            </div>
            <div>
                <textarea class="commentTextArea"></textarea>
            </div>
            </div>
        </form>
    </div>
</body>
</html>