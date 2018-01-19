<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body  style="background-color:gray">
	</br>
</br></br>
</br>
		<div class="container" style="background-color:lightgreen">
			<div class="col-sm-3"></div>
			<div class="col-sm-6"> 
			<form action="<?php echo $_SERVER['PHP_SELF'];  ?>" method="POST">

				<div><h1>Update Registraion Form <h2> </div>
				<label>User ID:</label>
				 <input type="text" class="form-control" placeholder="User Id" name="_ID" />
				<label>Name:</label>
				 <input type="text" class="form-control" placeholder="first Name" name="_name" />
				 <label>Last Name:</label>
				  <input type="text" class="form-control" placeholder="Last Name" name="_lname" />
				  <label>Address:</label>
				  <textarea type="text" placeholder="Address" class="form-control" name="_addres" ></textarea>
				  <label>Phone No:</label>
				  <input type="Number" class="form-control " placeholder="Number" name="_phne" />
				  <label>Email:</label>
				  <input type="text" class="form-control" placeholder="exampl@gmail.com" name="_email" />
				  <label>Password:</label>
				  <input type="Password" class="form-control" placeholder="Password" name="_pass" />
				</br>
				  <input type="submit" class="btn btn-default"  name="btup" value="Update"/ > 
				   
			</form>
		</div>
	</div>
</body>

</html>
<?php
$conn    = mysqli_connect('127.0.0.1','root','vertrigo','Rgform');
if($conn->connect_error){
	die("Connection failed: ".$conn->connect_error);
}


if (isset($_POST['btup'])){
	 $name=$_POST['_name'];
     $lname=$_POST['_lname'];
     $address=$_POST['_addres'];
     $phone=$_POST['_phne'];
     $email=$_POST['_email'];
     $pass=$_POST['_pass'];
	$query="Update Student_Data Set name='$name',lname='$lname',address=' $address',phone='$phone',email='$email',pass='$pass'
  where std_id = " .$_POST['_ID'];
 if($conn->query($query)==true){
 	echo "update data sucessfully";
 }
 else{
 	echo "Erorr".$query."<br>".$conn->error;
 }
}

?>