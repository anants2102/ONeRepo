<?php
    $con = mysqli_connect('localhost', 'root', "", 'db_con');
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $sql = "INSERT INTO contact_table (id, Name_field, Email_field, Subject_field, Message_field) VALUES ('0', '$name', '$email' ,'$subject','$message' )";
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Entries added!";
    }
    mysqli_close($con);
?>