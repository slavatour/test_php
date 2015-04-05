<?php
    define('MAIN_PATH', 'test_php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="./public/libs/zurb-foundation/css/normalize.css"/>
    <link rel="stylesheet" href="./public/libs/zurb-foundation/css/foundation.min.css"/>
    <link rel="stylesheet" href="./public/css/style.css"/>
    <link rel="stylesheet" href="./public/css/common.css"/>
</head>
<body>

<!--  header  -->
    <?php include('public/templates/header.php'); ?>

<!--  content  -->
    <?php include('public/templates/content.php'); ?>

<!--  social  -->
    <?php include('public/templates/social.php'); ?>

<!--  footer  -->
    <?php include('public/templates/footer.php'); ?>

    <script src="./bower_components/jquery/dist/jquery.min.js"></script>
    <script src="./bower_components/foundation/js/vendor/modernizr.js"></script>
    <script src="./public/libs/zurb-foundation/js/foundation.min.js"></script>
    <script>
        $(document).foundation();
    </script>
</body>
</html>