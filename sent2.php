<html>
<head>
</head>
<body>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];  ?>">
	<label> User ID: </label>
   <input type="number" name="_ID"/>
   <input type="submit" name="Del" value="DELETE"/>

</form>

</body>
</html>
<?php
$conn    = mysqli_connect('127.0.0.1','root','vertrigo','Rgform');
if($conn->connect_error){
	die("Connection failed: ".$conn->connect_error);
}

if(isset($_POST['Del'])){
	 	

           $query2="delete from Student_Data where std_id=".$_POST['_ID'];
	 	
	 	 if($conn->query($query2)==true){
	 	 	echo "Data delete succesfully";
	 	 }
	 	 else{
	 	 	echo "Error".$query2."<BR>".$conn->error;
	 	 
	 	 }
	 	}






?>