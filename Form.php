<htm>
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	    <script type="text/javascript"  src="js/bootstrap.min.js"></script>

	</head>
	<body  style="background-color:gray">
	</br>
</br></br>
</br>
		<div class="container" style="background-color:lightgreen">
			<div class="col-sm-3"></div>
			<div class="col-sm-6"> 
			<form action="sent.php" method="POST">

				<div><h1>Microsoft Registraion Form <h2> </div>

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
				  <input type="submit" class="btn btn-default"  name="btn"/ > 
				   <input type="submit" class="btn btn-default"  name="btn2"  value="Read"/ >
				   </form>
				   <form action="sent3.php" method="POST">
				<input type="submit" class="btn btn-default" name="btn3" value="UPDATE"/>
				<</form>
				 <form action="sent2.php" method="POST">
				<input type="submit" class="btn btn-default" name="btn3" value="Delete"/>

				<</form>


		</div>

			
			   
				  

			
				



		</div>




	</body>



	</html>
