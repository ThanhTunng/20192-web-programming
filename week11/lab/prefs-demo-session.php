<?php
    session_start();
    $bg = $_SESSION['bg'];
    $fg = $_SESSION['fg'];
?>
<html>
<head>
    <title>Front Door</title>
    <style>
        body{
            background-color: <?= $bg ?>;
            color: <?= $fg ?>;
        }
    </style>
</head>
<body>
    <h1>Welcome to the Store</h1>
    <p>We have many find products for you to view. PLease feel free to browse
    the aisles and stop an assistant at any time. But remember, you break it you bought it.</p>

    <p>Would you like to <a href="PrefSelection.html">change your preference?</a>
</body>
</html>