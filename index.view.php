<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TECSANplus+</title>
    <!-- Fonts -->
    <script src="https://kit.fontawesome.com/9e31194203.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/alert.css">

    <!-- -- Script Scroll -- -->
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/efectos.js"></script>
</head>

<body>

    <!-- Header begins -->
    <div class="header">
        <?php include("components/header/header.php");?>
    </div>
    <!-- Header ends -->

    <!-- Main begins -->
    <div class="main">
        <?php
            include("components/main/section-1.php");
            include("components/main/section-2.php");
            include("components/main/section-3.php");
            include("components/main/section-4.php");
            include("components/main/section-5.php");
        ?>
    </div>
    <!-- Main begins -->

    <!-- Footer begins -->
    <div class="footer">
        <?php include("components/footer/footer.php");?>
    </div>
    <!-- Footer begins -->

    <!-- -- Scripts -- -->
    <script src="js/jquery-3.6.0.min.js"></script>

    

</body>
</html>
