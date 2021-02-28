<?php
try {
    $db = new mysqli("localhost", "root", "", "order");
} catch (Exception $e) {
    echo "Service unavailable . check your db name !";
    exit;
}
if (isset($_POST['name']) && isset($_POST['number'])) {
    $name = $_POST['name'];
    $number = $_POST['number'];
    $is = $db->query("INSERT INTO `orders`(`name`, `number`) VALUES ('$name','$number')");
    if ($is == TRUE) {
        header('Location: msg.php');
        unset($_POST);
        exit();
    }
}
?>
