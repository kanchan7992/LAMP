
<?php
include('config.php');
?>



<?php
    $sql = "SELECT * FROM `users`";
    $result = mysqli_query($conn, $sql);

    if($result->num_rows > 0){
    ?>
     <div id="tableedit">
    <table border="1px">
		<thead>
			<tr>
				<th>Name</th>
				<th>E-Mail</th>
				<th>Gender</th>
				<th>City</th>
				<th>Edit</th>
				<th>Delete</th>
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
			    <td><a href="edit1.php?id=<?php echo $row['id']?>"><input style="padding-left: 10px; background-color: red; color:white" type="button" value="Edit"></a></td>
			    <td><input onclick="deleteme(<?php echo $row['id']?>)" style="padding-left: 10px; background-color: red; color:white" type="button" value="Delete"></td>
            </tr>

            <script type="text/javascript">
           
           function deleteme(id)
           {
           	if(confirm("Are you sure you want to delete this record?")){
           		window.location.href='delete.php?id='  +id+' '; 
           		return true;          
            	}
           }
         </script>

          <?php } ?>
		</tbody>
	</table>
	</div>
	    <br>
	    <a style="padding-left: 145px;" href="details2.php"><input  style="padding-left: 10px; background-color:blue; color:white" type="button" value="Back"></a>
<?php
}
?>
<html>
    <head>
        <title>User Details</title>
        <style type="text/css">

        	
        		table{
                       border-collapse: collapse;
                       margin-left: 100px;
                      
        		}

        		#tableedit{
        			   padding-left: 50px;
                       padding-top: 10px;
                }
               
               th{
               	background-color: lightgrey;
               	
               }
               td{
               	background-color: lightgreen;

               
               }
                th,td{
                	width-right: 10px;
                	padding-left: 10px;
                	padding-right: 20px; 
                	padding-top: 10px;
                	padding-bottom: 10px;
                }
        	
        </style>
        
</head>
<body>

</body>
</html>