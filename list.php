<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<header>

</header>
<section>
    <nav>
        <ol>
            <li><a href="Lab.html"></a></a></li>
        </ol>
    </nav>
<article>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>GENDER</th>
        </tr>
<?php
        $servername ="localhost";
        $username ="root";
        $password ="";
        $db ="lab";

        $connection = new mysqli($servername,$username,$password,$db);

        if($connection->connect_error) {
            die("Connection failed: " . $connection->connection_error);
        }
        $sql_read = "select * from students";
        $result = $connection->query($sql_read);

        if($result->num_rows >0){
            while($rowdata =$result->fetch_assoc()){
                echo "<tr>";
                echo "<tr>".$rowdata["id"]."</td>";
                echo "<tr>".$rowdata["fullname"]."</td>";
                echo "<tr>".$rowdata["email"]."</td>";
                echo "<tr>".$rowdata["gender"]."</td>";
                echo "</tr>";
            }
        }
        else
            echo "No result";

            $connection->close();
        ?>

    </table>


</article>
</section>

</body>
</html>