<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Web Development Practice Project" />
    <meta name="keywords" content="Html, CSS, XML, JAVASCRIPT, Web Development, Android" />
    <meta name="author" content="Sharukh Shaikh" />
    <link rel="stylesheet" type="text/css" href="css/indexStyle.css" />
    <title>Sharkopedia</title>
</head>
<body>
<nav>
<p id="logo_name">Sharko</p>
<ul>
    <li><a class="<?php echo $currentPage == 'index'?'active': '' ?>" href="index.php">Home</a></li>
    <li><a class="<?php echo $currentPage == 'firstweek'?'active': '' ?>" href="firstweek.php">First Week</a></li>
    <li><a class="<?php echo $currentPage == 'secondweek'?'active': '' ?>" href="secondweek.php">Second Week</a></li>
    <li><a class="<?php echo $currentPage == 'thirdweek'?'active': '' ?>" href="thirdweek.php">Third Week</a></li>
</ul>
</nav>