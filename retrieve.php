
<html>
<body>


<?php
if(!isset($_COOKIE['name']) ||
    !isset($_COOKIE['age'])||
    !isset($_COOKIE['favorite_color'] ) )
{
    echo "Cookies not set! <br>";

} else {

    echo "Your name is " . $_COOKIE['name']."<br>";
    echo "Your age is " . $_COOKIE['age']."<br>";
    echo "Your favorite color is " . $_COOKIE['favorite_color']."<br>";
}
?>

</body>
</html>