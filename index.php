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
   <?php
    $books = [
            "The Neverending Story",
            "The Perks of Being a Wallflower",
            "DUNE"
    ];

   ?>
    <h1>
        <ul>
            <?php foreach ($books as $book) : ?>
                <li><?=$book?></li>
            <?php endforeach; ?>
        </ul>
    </h1>
</body>
</html>