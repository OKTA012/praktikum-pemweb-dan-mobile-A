<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM info_karyawan ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<a href="add.php">Add New User</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>Name</th> <th>TTL</th> <th>Alamat</th> <th>Jenis_Kelamin</th> <th>No_Telpon</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['TTL']."</td>";
        echo "<td>".$user_data['alamat']."</td>";   
        echo "<td>".$user_data['jenis_kelamin']."</td>";
        echo "<td>".$user_data['no_telpon']."</td>"; 
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>