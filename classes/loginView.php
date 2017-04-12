
	<?php
	  class loginView {
//this isthe view file for the login controller. has forms for users to sign up/log in
	    public function getLoginPage() {

	      if($_GET['form']) {
	        $page = '<!DOCTYPE html>
	        <html>
	        <head>
		  <title>Login</title>

		</head>

		<body>

		      <form id="login" action="index.php?controller=loginCtrl"     method="post">
		        <h1>Register Here</h1><br>

		      <input type="text" placeholder="First Name" id="username" name="name" required /><br>

		      <input type="text" placeholder="Last Name" id="username" name="lastName" required /><br>

			  <input type="text" placeholder="User name" required=""
			  id="username" name="username" /><br>

			  <input type="text" placeholder="Enter email" id="username" name="email" required /><br>

			  <input type="password" placeholder="Password" required=""
			  id="password" name="password"/><br>

			  <input type="password" placeholder="Confirm Password"
			  required="" id="password" name="password2"/><br>

			<input type="hidden" name="form" value="register"><br>

			  <input type="submit" value="Register" /><br>
			  <a href="index.php">Register here</a><br>

		      </form>

		</body>
	      </html>';

	      return $page;


	      }
	      else {
//this next form contains a hidden field that is hidden
// it is usually filled by bots that look at page code
// this acts as a security measure
	      $page = '<!DOCTYPE html>
	        <html >
	        <head>

		  <title>Login</title><br>

		</head>
		<body>

		      <form id="login" action="index.php?controller=loginCtrl"
		      method="post"><br>
		        <h1>Login Here</h1><br>

			  <input type="text" placeholder="Username" id="username"
			  name="username" required /><br>

			  <input type="password" placeholder="Password" required=""
			  id="password" name="password"/><br>

			<input type="hidden" name="form" value="login"><br>

			  <input type="submit" value="Log in" /><br>
			  <a href="index.php?form=register">Register</a><br>

		      </form>


		</body>
	      </html>';

	      return $page;
	      }
	    }
	  }
