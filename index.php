<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <table>
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Date of birth</th>
                <th>Email id</th>
                <th>Password</th>
                <th>Address</th>
                <th>Website</th>
                <th>Comment</th>
                <th>Phone number</th>
                <th>Gender</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <p>this is th outsode tag of both tags </p>
        <?php
        include 'conn.php';
        $query = "select * from userdatabase";
        $res=mysqli_query($con,$query);
        while($row=mysqli_fetch_array($res)){
            ?>
           <tbody>
            <tr>
                <!-- <th></th> -->
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['surname']; ?></td>
                <td><?php echo $row['dob']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['website']; ?></td>
                <td><?php echo $row['comment']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['gender']; ?></td>
                <td><a href="delete.php?id=<?php echo $row['id']; ?>"><input type="button" value="delete"></a></td>
                <td><a href="update.php?id=<?php echo $row['id']; ?>"><input type="button" value="update"></a></td>
                
            </tr>
         </tbody>
         <?php
        }
         ?>
     </table>
</body>
</html>