<?php
  include('config.php');
 ?>
 <?php
 $id = $_GET['id'];
 $sql = "SELECT * FROM `users` WHERE `id` =$id";
 $result =mysqli_query($conn, $sql);
 $row =$result->fetch_assoc();
 $username = $row['username'];
 $email = $row['email'];
 $gender = $row['gender'];
 $city = $row['city'];

 ?>

<?php
if(isset($_POST['update'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];

    $sql = "UPDATE `users` SET username='$username', email='$email', gender='$gender', city='$city' WHERE id='$id'";
    if(mysqli_query($conn, $sql)){
        echo "Data updated successfully...";
        header("Location:details1.php");
    }
    else{
        echo "Updation failed..";
    }
}
?>

<html>
    <head>
        <title>HTML Forms</title>
        <style>
         #formedit{
                margin-top: 20px;
                margin-left: 200px;
                margin-right: 500px;
                padding-left: 40px;
                padding-top: 30px;
                padding-bottom: 20px;

                background-color: lightblue;
                
            }
        </style>
    </head>
<body>
	<div id = "formedit">
<form method="POST" action="edit1.php?id=<?php echo "$id"?>">
    USERNAME <input style="margin-left: 20px;" type="text" name="username" value=<?php echo "$username"?> placeholder="Type Your Username" required><br><br>
    E-MAIL <input style="margin-left: 60px;" type="email" name="email" value=<?php echo "$email"?> placeholder="Type Your E-mail" required><br><br>

    GENDER <input style="margin-left: 40px;" type="radio" name="gender" value="Male"<?php if($gender=="Male"){echo "checked";} ?>>Male
    <input type="radio" name="gender" value="Female"<?php if($gender=="Female"){echo "checked";} ?>>Female
    <input type="radio" name="gender" value="other"<?php if($gender=="other"){echo "checked";} ?>>Other<br><br>
    
    SELECT CITY<select style="margin-left: 20px;" name="city" value=<?php echo "$city" ?>>
        <option value="Dehradun"<?php if($city=="Dehradun"){echo "selected";} ?>>Dehradun</option>
        <option value="Delhi" <?php if($city=="Delhi"){echo "selected";} ?>>Delhi</option>
        <option value="Shimla" <?php if($city=="Shimla"){echo "selected";} ?>>Shimla</option>
        <option value="Mumbai" <?php if($city=="Mumbai"){echo "selected";} ?>>Mumbai</option>
    </select><br><br>
    <input style="padding-left: 10px; background-color:blue; color:white" type="submit" name="update" value="UPDATE">
</form>
</div>
</body>
</html>
