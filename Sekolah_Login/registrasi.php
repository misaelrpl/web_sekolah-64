<html>
<head>
	<title>Registrasi</title>
	<link rel="stylesheet" href="style.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	 <style>
        body {
            background-image: url('img/papua.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body>
<?php
require('koneksi.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($conn,$username); 
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn,$password);
	$level = stripslashes($_REQUEST['level']);
	$level = mysqli_real_escape_string($conn,$level);
	$nama = stripslashes($_REQUEST['nama']);
	$nama = mysqli_real_escape_string($conn,$nama);
        $query = "INSERT into `user` (nama, username, password, level) 
		VALUES ('$nama', '$username', '$password', '$level')";
        $result = mysqli_query($conn,$query);
        if($result){
            echo "<div class='alert alert-success' role='alert'>
<h3>Registrasi Berhasil.</h3>
<br/>Klik disini untuk <a href='login.php'>Login</a></div>";
        }
    }else{
?>

<div class="container d-flex justify-content-center align-items-center"
      style="min-height: 100vh; width:100vh;">
      	<form name="registration" class="card border-2 border-black shadow-lg" action="" method="post" style="width: 450px;">
      	      <h1 class="text-center p-3">Registrasi</h1>
		  <div class="p-5 mb-1">
			<label for="nama" 
		           class="form-label">Name</label>
		    <input type="text" 
		           class="form-control" 
		           name="nama" 
		           required>
		    <label for="username" 
		           class="form-label">Username</label>
		    <input type="text" 
		           class="form-control" 
		           name="username" 
		           required>
			<label for="password" 
		           class="form-label mt-1">Password</label>
		    <input type="password" 
		           name="password" 
		           class="form-control" 
		           required>
			<div class="mt-3">
				<td bgcolor="#ffc0cb"><strong>Role :</strong></td>
				<select name="level" style="width:140px;">
				<option value="admin">Admin
				<option value="user">User
				</select>
				</td>
			</div class="mt-3">
				<div class="mt-3 pd-grid gap-2 d-md-block">
					<button name="submit" class="btn btn-success mb-3" type="submit" value="Login">Submit</button>
					<button name="reset "class="btn btn-warning mb-3" type="reset" value="Reset">Reset</button><br>
					<tr><td>Not registered? <a href='registrasi.php'>Register Here</a></td></tr>
				</div>
		  </div>
		</form>
      </div>
<?php } ?>
</body>
</html>
