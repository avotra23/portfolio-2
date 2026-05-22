<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MTechA-<?php if(isset($_SESSION['page'])) {echo $_SESSION['page'];} ?></title>
    <link rel="stylesheet" href="../static/css/nave.css">
    <link rel="stylesheet" href="../static/css/base.css">
    <script src="../static/js/nav.js" defer></script>
    <script src="../static/js/anime.min.js"></script>
    <link rel="stylesheet" href="../static/css/anim.css">
    <link rel="stylesheet" href="../static/css/bouton.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/alphardex/aqua.css@master/dist/aqua.min.css
">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="../static/css/separate.css">
</head>
<body>
    <?php include("navbar/navbar.php"); ?>
    <?php include("anim.php");?>
    
</body>
</html>