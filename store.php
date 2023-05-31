<?php

$servername ="localhost";
$username ="root";
$password ="";
$db ="lab";

$connection = new mysqli($servername,$username,$password,$db);

if($connection->connect_error){
    die("Connection failed: " . $connection->connection_error);
}
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];

    $sql_query = "insert into students(fullname, email, gender) values('$fullname','$email','$gender')";

    if(connection_>query($sql_query) == TRUE){
        echo "The data is recorded to database succesfully ";
    }
else
    echo "Error: " . $connection->error;

    $connection->close();
    ?>

