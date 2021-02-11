<?php
include('config.php');
?>

<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];

    $sql = "INSERT INTO `users` (`username`, `email`, `gender`, `city`) VALUES ('$username', '$email', '$gender', '$city')";
    mysqli_query($conn, $sql);
}
else{
    echo "  Please click submit button to submit the data..";
}
?>

<html>
    <head>
        <title>HTML Forms</title>
        <style type="text/css">
            #formedit{
                margin-top: 30px;
                margin-left: 200px;
                margin-right: 500px;
                padding-left: 40px;
                padding-top: 20px;
                padding-bottom: 20px;

                background-color: lightblue;
                
            }
            h3{
                padding-left: 50px;
                letter-spacing: 0.5px;
            }
        </style>
    </head>
<body>
    <div id="formedit">
        <h3>Please fill your details</h3>
<form method="POST" action="add.php">
    <br>
    USERNAME <input style="margin-left: 20px;"type="text" name="username" placeholder="Type Your Username" required><br><br>
    E-MAIL <input style="margin-left:  60px;" type="email" name="email" placeholder="Type Your E-mail" required><br><br>
    GENDER <input style="margin-left: 50px;" type="radio" name="gender" value="Male">Male
    <input type="radio" name="gender" value="Female">Female
    <input type="radio" name="gender" value="other">Other<br><br>

    SELECT CITY<select style="margin-left: 22px;" name="city">
        <option value="Dehradun">Dehradun</option>
        <option value="Delhi">Delhi</option>
        <option value="Shimla">Shimla</option>
        <option value="Mumbai">Mumbai</option>
    </select><br><br>
    <input style="padding-left: 10px; background-color:blue; color:white" type="submit" name="submit" value="Click Here To Submit Your Data"><br><br>
    <a href="details2.php"><input style="padding-left: 10px; background-color:blue; color:white" type="button" value="next"></a>

</form>
</div>
</body>
</html>