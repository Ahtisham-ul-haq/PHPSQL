<?php

$conn    = mysqli_connect('127.0.0.1','root','vertrigo','Rgform');
if($conn->connect_error){
	die("Connection failed: ".$conn->connect_error);
}
/*  $query="Create Database Rgform";
if($conn->query($query)==true){
	echo"Database created Sucseefully";
}
else{
	echo"Error Database not Create";
}




*/

/*$sqlquery="create table Student_Data
(std_id int not null AUTO_INCREMENT PRIMARY KEY,
 name varchar(100),
 lname varchar(100),
 address varchar(200),
 phone varchar(40),
 email varchar(50),
 pass varchar(50)	
	) ";
if($conn->query($sqlquery)==true){
	echo "Table created succsefuly";

}
else
{
	echo"database not created".$conn->error; 
}*/


$name    = $_POST['_name'];
$lname   = $_POST['_lname'];
$Address    = $_POST['_addres'];
$phone = $_POST['_phne'];
$email = $_POST['_email'];
$password = $_POST['_pass'];

//insert data in Studnet Data Table
$query   = "INSERT Into Student_Data (name,lname,address,phone,email,pass) VALUES(' $name'  ,  '$lname' ,  '$Address'  ,  '$phone' , ' $email' , '$password')";

if(isset($_POST['btn'])){
if($conn->query($query)== True){
	$last_id = $conn->insert_id;
	echo"new record created succesfully. Last insert id is".$last_id;
}else{
	echo"Error".$query ."</br>".$conn->error;
	}
	 }
	 //Fetch the Data from Student table
	if(isset($_POST['btn2'])){
		$query1 ="Select std_id, name,lname,address from Student_Data";
		$result=$conn->query($query1);
		if($result->num_rows>0){
			 echo "<table style='border:1px solid black;width:50%;hight:100%;'><tr ><th>ID</th><th>Name</th><th>Adress</th></tr>";
			while($row=$result->fetch_assoc()){
				echo "<tr ><td style='width:150px;border:1px solid black '>".$row["std_id"]."</td><td style='width:400px;border:1px solid black'>".$row["name"]." ".$row["lname"]."</td><td style='width:550px;border:1px solid black;'>".$row['address']."</td></tr>";
			}
			echo"</table>";
		}
else{
	echo"Errror".$query ."</br>".$conn->error;
	}
	 }
	 
	 

?>
