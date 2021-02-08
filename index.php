<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TECSANplus+</title>
    <script src="https://kit.fontawesome.com/9e31194203.js" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.css">
</head>

<body>
    
    <header class="header">

        <?php
            include("header/header.php");
        ?>

    </header>

    <main class="main">
    
        <?php
            include("main/section-1.php");
            include("main/section-2.php");
            include("main/section-3.php");
            include("main/section-4.php");
            include("main/section-5.php");

        ?>

    </main>

    <footer class="footer">

        <?php
            include("footer/footer.php");
        ?>

    </footer>
</body>
</html>