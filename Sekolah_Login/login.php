<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="style.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	 <style>
        body {
            background-image: url('img/belitung.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body class="white">
	<div class="container d-flex justify-content-center align-items-center"
      style="min-height: 100vh; width:100vh;">
      	<form class="card border-2 border-black shadow-lg"action="cek_login.php" method="post" name="login" style="width: 450px;">
      	      <h1 class="text-center p-3">Login</h1>
      	      <?php if (isset($_GET['error'])) { ?>
      	      <div class="alert alert-danger" role="alert">
				  <?=$_GET['error']?>
			  </div>
			  <?php } ?>
		  <div class="p-4 mb-1">
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
				<div class="mt-3 pd-grid gap-2 d-md-block">
					<button name="submit" class="btn btn-success mb-3" type="submit" value="Login">Login</button>
					<button name="reset "class="btn btn-warning mb-3" type="reset" value="Reset">Reset</button><br>
					<tr><td>Not registered? <a href='registrasi.php'>Register Here</a></td></tr>
				</div>
		  </div>
		</form>
      </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
