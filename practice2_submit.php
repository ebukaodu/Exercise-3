
<?php
// Practice 1
// Step1: Make a form that submits one value to POST super global

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];

    $ok = true;
    if (!isset($_POST['name']) || $_POST['name'] == ''){
        $ok = false;
        echo "Name is required";
    }
    if ($ok) {
        echo "Name: {$name}<br>
            E-mail: {$email}<br>";
    }
}

?>