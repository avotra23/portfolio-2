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

</head>
<body>
    <?php include("navbar/navbar.php"); ?>
    
</body>
</html>