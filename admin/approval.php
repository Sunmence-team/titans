<?php
    session_start();
    include "../connect.php";


    $id = $_GET['approve'];
        $sql = "UPDATE `testimonials` SET `status`= '1' WHERE `id` = '$id' ";
        if ($conn->query($sql) === TRUE) {
            header("location: index.php#table$id");
        } else {
            $msg = "Not Approved";
        }

?>