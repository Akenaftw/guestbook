<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//image this code could be a complex query
$users = ['John Doe', 'Joe Doe', 'John Smith', 'An Onymous'];
$articles = ['Terror over london', 'Football: a useless hobby?', 'Economic crisis ahead, says expert', 'Fortis is Fortwas'];
//end controller
//start view
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My site</title>
</head>
<body>
    <h1>Welcome to my site!</h1>
    <form method="post" name="comment">
    title: <input type="text" name="title" required>
    Name:    <input type="text" name="name" required>
    date:    <input type="text" name="date" required>
    Comment:    <input type="text" name="Comment" required>
        <input type="submit" value="Sign">
    </form>

    <h2>Recent articles</h2>
    <h2>Recent articles</h2>
</body>
</html>
