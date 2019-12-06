<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM `Stuff` WHERE 1");

?>

<html>
<head>    
    <title>Homepage</title>
</head>

<body>
<a href="add.php">Add New User</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>Name</th> <th>Mobile</th> <th>Email</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['FirstName']."</td>";
        echo "<td>".$user_data['LastName']."</td>";
    
    }
    ?>
    </table>
</body>
</html>