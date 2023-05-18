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
    $title = "The Neverending Story";
    $haveRead = false;

    if($haveRead){
        $message = "You have read $title";
    }else {
        $message = "You have not read $title";
    }
   ?>
    <h1>
        <?php echo $message ?>
    </h1>
</body>
</html>