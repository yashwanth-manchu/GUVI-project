<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
   <!-- <form class="signup-form" action="/register" method="post">-->
   <form class="signup-form" action="display.php" method="post">

      <!-- form header -->
      <div class="form-header">
        <h1>Log In</h1>
      </div>

      <!-- form body -->
      <div class="form-body">

		<!-- User Name and Password-->
        
		<div class="form-group">
          <label for="user-id" class="label-title">User Name*</label>
          <input type="text" name="user_id" id="user_id" class="form-input" placeholder="enter your User Name" required="required">
        </div>
		<div class="form-group">
          <label for="password" class="label-title">Password *</label>
          <input type="password"  name="password" id="password" class="form-input" placeholder="enter your password" required="required">
        </div>
	
        
      <!-- form-footer -->
      <div class="form-footer">
        <span>* required</span>
        <button type="submit" class="btn">Sign In</button>
      </div>

    </form>

      </body>
</html>
