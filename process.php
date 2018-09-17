<?php
if(isset($_POST['submit'])) {
    setcookie('name', $_POST['name'], time() + (3600), "/");
    setcookie('age',$_POST['age'], time() + (3600), "/");
    setcookie('favorite_color', $_POST['favorite_color'], time() + (3600), "/");



}