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
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.menu-toggle').click(function(){
                $('.menu-toggle').toggleClass('active')
                $('nav').toggleClass('active')
            })
        })
    </script>
    <title>Sharkopedia</title>
</head>
<body>
<header>
    <p class="logo_name">Sharko</p>
    <div class="menu-toggle"></div>
<nav>
    <ul>
    <li><a class="<?php echo $currentPage == 'index'?'active': '' ?>" href="index.php">Home</a></li>
    <li><a class="<?php echo $currentPage == 'firstweek'?'active': '' ?>" href="firstweek.php">First Week</a></li>
    <li><a class="<?php echo $currentPage == 'secondweek'?'active': '' ?>" href="secondweek.php">Second Week</a></li>
    <li><a class="<?php echo $currentPage == 'thirdweek'?'active': '' ?>" href="thirdweek.php">Third Week</a></li>
    </ul>
</nav>
<div class="clear-fix"></div>
</header>