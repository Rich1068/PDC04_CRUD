<?php

Include 'database.php';

if (isset($_GET['id'])){
    $user_id = $_GET['id'];
    $sql = "DELETE FROM `users` WHERE `user_id` = '$user_id'";

    $result = $conn->query($sql);
    if ($result == TRUE) {
        echo "<br> Record deleted successfully.";
    } else {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}