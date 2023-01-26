<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="">
    <title> <?php echo $pageTitle ?> Brilo Example </title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="<?php echo $pageDescription ?>">
    <meta name="keywords" content="<?php echo $pageKeywords ?>">
    <meta name="robots" content="index, follow">

    <!-- Facebook Meta Tags -->
    <meta property="og:title" content="<?php echo $facebookTitle ?>">
    <meta property="og:image" content="<?php echo $facebookImage ?>">
    <meta property="og:description" content="<?php echo $facebookDescription ?>">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="./assets/media/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./assets/media/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./assets/media/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/media/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./assets/media/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./assets/media/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./assets/media/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./assets/media/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/media/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="./assets/media/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/media/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./assets/media/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/media/img/favicon/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="./assets/media/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- CSS Styles -->
    <link rel="stylesheet" href="./assets/css/main.css?v=<?php echo @filemtime(__DIR__ . '/assets/css/main.css'); ?>">
</head>

<body class="js_body <?php echo $_SERVER['SCRIPT_NAME'] === '/index.php' ? 'isHp' : ''; ?>">

  <header>
    <div class="container">
      <ul class="mainNav js_mainNav">
        <li class="mainNav--item"><a href="" class="mainNav--link">Home</a></li>
        <li class="mainNav--item"><a href="" class="mainNav--link">About me</a></li>
        <li class="mainNav--item"><a href="" class="mainNav--link">My work</a></li>
      </ul>
      <div class="mainNav--burger js_openBurger">
					<span></span>
					<span></span>
					<span></span>
			</div>
    </div>
  </header>