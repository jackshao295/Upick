<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!--檔頭外掛-->
    <?php require("C:\\xampp\htdocs\Upick\parts\html_head.php"); ?>

    <!-- google font 'Freckle Face', cursive-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Freckle+Face&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Freckle+Face&display=swap" rel="stylesheet">
    <!-- wp-1.css -->
    <link rel="stylesheet" href="/Upick/css/wp-1.css">
    <!-- style -->
    <style>
        .wp-button:hover {
            background-color: #47D5CE;
        }
    </style>
</head>

<body>
    <?php require("C:\\xampp\htdocs\Upick\parts\html_navbar.php"); ?>
    <div class="wpNavSpace-CL"></div>

    <div class="row col-sm-12 justify-content-center mx-auto container">
        <div class="wp-bg wp-editing d-none d-sm-block">
            <span>editing</span>
            <img src="/Upick/images/wpimg/icon/editing.svg" alt="">
        </div>

        <div class="wp-bg-img wp-editing ">

        </div>
        <div class="text-center wp-editing wp-index">
            <div class="wp-img">
                <img src="/Upick/images/wpimg/editing.svg" alt="">
            </div>
            <h2 class="wp-editing ">
                影片剪輯
            </h2>
            <div class="mx-auto wp-editing wp-button-group">
                <button class="wp-button wp-editing">一鍵組機</button>
                <a href="/Upick/web/wepick/wepick-2.php">
                    <button class="wp-button wp-editing">自選品牌</button></a>
            </div>
        </div>

    </div>


    <!--SCRIPT-->
    <?php require("C:\\xampp\htdocs\Upick\parts\scripts.php"); ?>
</body>

</html>