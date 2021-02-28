<?php
try {
    $db = new mysqli("localhost", "root", "", "contact");
} catch (Exception $e) {
    echo "Service unavailable . check your db name !";
    exit;
}

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['msg'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];

    $is = $db->query("INSERT INTO `data`(`name`, `email`, `msg`) VALUES ('$name','$email','$msg')");
    if ($is == TRUE) {
        header('Location: msg.php');
        unset($_POST);
        exit();
    }
}
?>
