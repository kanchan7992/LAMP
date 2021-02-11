
<?php
include('config.php');
?>



<?php
    $sql = "SELECT * FROM `users`";
    $result = mysqli_query($conn, $sql);

    if($result->num_rows > 0){
    ?>
     <div id="tableedit">
    <table border="1.5px">
		<thead>
			<tr>
				<th>Name</th>
				<th>E-Mail</th>
				<th>Gender</th>
				<th>City</th>
			</tr>
		</thead>
		<tbody>

            <?php
			while($row = $result->fetch_assoc()){?>
			<tr>
				<td><?php echo $row['username']?></td>
				<td><?php echo $row['email']?></td>
				<td><?php echo $row['gender']?></td>
				<td><?php echo $row['city']?></td>
            </tr>
           <?php } ?>
		</tbody>
	</table>
	</div>
<?php
}
?>
<html>
    <head>
        <title>User Details</title>
        <style type="text/css">
        	
        		table{
                       border-collapse: collapse;

                      }

        		#tableedit{
        			   padding-left: 50px;
                       padding-top: 10px;
                       margin-left: 100px;
                }
               
               th{
               	background-color: lightgrey;
               	
               }
               td{
               	background-color: lightblue;

               }
                th,td{
                	width: 20px;
                	padding-left: 10px;
                	padding-right: 30px; 
                	padding-top: 10px;
                	padding-bottom: 10px;
                }
        	
        </style>
</head>
<body>
	<br><a style="padding-left: 145px;" href="add.php"><input style="padding-left: 10px; background-color: blue; color:white" type="button" value="Back"></a>
	<a href="details1.php"><input style="padding-left: 10px; background-color: blue; color:white" type="button" value="Click here to Update/Delete"></a>

</body>
</html>