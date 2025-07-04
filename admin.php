<?php
// Include config.php file
include "config.php";



// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Insert data
if (isset($_POST['insert'])) {
    $username = $_POST['fullname'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    
    $sql = "INSERT INTO `registration` (`fullname`, `password`, `email`, `phone`) VALUES ('$username', '$password', '$email', '$phone')";
    
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

?>
<html>
  <head>
    <style>
      form {
        display: flex;
        flex-direction: column;
        align-items: left;
        
        
        
      }
      label {
        margin-top: 1rem;
        margin-left: 2%;
      }
      input[type="text"],
      input[type="password"],
      input[type="email"] {
        width: 30%;
        padding: 0.5rem;
        margin-top: 0.5rem;
        margin-left: 2%;
        border-radius: 0.25rem;
        border: 1px solid gray;
      }
      input[type="submit"] {
        margin-top: 1rem;
        margin-bottom: 1rem;
        margin-left: 2rem;
        margin-right: 80rem;
        background-color: #4CAF50;
        color: white;
        padding: 0.5rem;
        border: none;
        align-items: left;
        border-radius: 0.25rem;
        cursor: pointer;
      }
      input[type="submit"]:hover {
        background-color: #3e8e41;
      }
    </style>
  </head>
  <body>
    <form method="post">
      <label>Full Name:</label>
      <input type="text" name="fullname" require>
      <label>Password:</label>
      <input type="password" name="password" require minlength="8">
      <label>Email:</label>
      <input type="email" name="email" require>
      <label>Phone:</label>
      <input type="text" name="phone" require minlength="10">
      <input type="submit" name="insert" value="Insert">
    </form>
    
  </body>
</html>

<?php
// Update data
if (isset($_POST['update'])) {
   
    $username = $_POST['fullname'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    
    $sql = "UPDATE `registration` SET  `password`='$password', `email`='$email', `phone`='$phone' WHERE `fullname`='$username'";
    
    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Delete data
if (isset($_POST['delete'])) {
    $username = $_POST['fullname'];
    
    $sql = "DELETE FROM `registration` WHERE `fullname`='$username'";
    
    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}


// Select data
$sql = "SELECT * FROM `registration`";
$result = mysqli_query($conn, $sql);

?>

<!-- Display data in table -->
<table border="1">
    <thead>
        <tr>
            
            <th>Full Name</th>
            <th>Password</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            
            <td><?php echo $row['fullname']; ?></td>
            <td><?php echo $row['password']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td>
            <form method="post">
    <input type="hidden" name="fullname" value="<?php echo $row['fullname']; ?>">
    <input type="submit" name="delete" value="Delete">
</form>
<div>
                <form method="post">
                    
                    <input type="text" name="fullname" value="<?php echo $row['fullname']; ?>">
                    <input type="password" name="password" value="<?php echo $row['password']; ?>">
                    <input type="email" name="email" value="<?php echo $row['email']; ?>">
                    <input type="text" name="phone" value="<?php echo $row['phone']; ?>">
                    <input type="submit" name="update" value="Update">
</form>
        </div>
</td>
</tr>
<?php } ?>
</tbody>

</table>




