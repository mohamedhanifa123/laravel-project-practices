<?php

	include ("connection.php");
	error_reporting(0);
	$result = mysqli_query($conn, "SELECT * FROM sampletable");
?>

<html>
<head>
    <title>Homepage</title>
</head>

<body>
<a href="add.php">Add New User</a><br/><br/>

    <table border=1 align="center">

    <tr>
        <th>id</th> <th>name</th> <th>gender</th> <th>email</th> <th colspan="2">operation </th>
    </tr>
    <?php
    while($user_data = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$user_data['id']."</td>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['gender']."</td>";
        echo "<td>".$user_data['email']."</td>";
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
    }
    ?>
    </table>
</body>
</html>