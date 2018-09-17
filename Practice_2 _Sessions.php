

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP session</title>
</head>
<body>

<?php
    session_start() ;

    if( isset( $_SESSION['counter'] ) )
    {
        $_SESSION['counter'] += 1;
    }else
        {
        $_SESSION['counter'] = 1;
    }

    $output = "You have visited this page ".  $_SESSION['counter'] . " times.";

    echo ($output);
    ?>

</body>
</html>