<?php

if(isset($_POST['first_name'])){
	echo "<pre>";
	print_r($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h2>REGISTRATION FROM</h2>
  <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
	
	<div class="form-group">
      <label for="email">First Name:</label>
      <input type="text" class="form-control" id="first_name" placeholder="Enter First Name" name="first_name" required value="<?php echo $_POST['first_name'] ?? '' ?>" >
    </div>
	
	<div class="form-group">
      <label for="email">Last Name:</label>
      <input type="text" class="form-control" id="last_name" placeholder="Enter Last Name" name="last_name">
    </div>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
	
	<div class="form-group">
      <label for="email">Phone:</label>
      <input type="tel" class="form-control" id="phone" placeholder="ex:99999999990" name="phone">
    </div>
	
	<div class="form-group">
      <label for="email">City:</label>
      <select name="city" class="form-control" multiple>
			<option value="">Select City </option>
			<option value="varanasi">Varanasi</option>
			<option value="patna">Patna </option>
			<option value="delhi">Delhi </option>
			
	  </select>
    </div>
	
	<div class="form-group">
      <label for="email">Gender:</label>
      <input type="radio" class="form-control"name="gender" checked>Male
	   <input type="radio" class="form-control"name="gender">FeMale
    </div>
	
	<div class="form-group">
      <label>Address:</label>
      <textarea name="address" class="form-control"></textarea>
    </div>
	
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" value="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>



