<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        body {display: grid;
        place-content: center;
        height: 100vh;
        font-family: sans-serif;}
    </style>
    <title>My First PHP Site</title>
</head>
<body>
    <h1>
        <?php
            $title = "The Neverending Story";
            echo "You have read $title!";
        ?>
    </h1>
</body>
</html>