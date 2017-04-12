
	<?php

	  class loginCtrl extends controller {

	    public function get() {

	      $login = new loginView;

	      $loginPage = $login->getLoginPage();
	      $this->html .= $loginPage;
	    }

	    public function post() {

				include 'config.php';

	      if($_POST['form'] == login) {
          //sanatize input
	        $myusername = mysqli_real_escape_string($db,$_POST['username']);
	        $mypassword = mysqli_real_escape_string($db,$_POST['password']);

		$password = md5($mypassword);
          //TODO add md5sum to login table
	        $sql = "SELECT userName, userId FROM user WHERE userName = '$myusername' and password = '$password'";
	        $result = mysqli_query($db, $sql);
	        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

	        $count = mysqli_num_rows($result);

	// If result matched $myusername and $mypassword, table row must be 1 row
	        if($count == 1) {
	          session_start();

		  $_SESSION['login_user'] = $myusername;
		  $_SESSION['user_id'] = $row['userId'];

		  header("location: index.php?controller=homepageCtrl");
	        }
	        else {
		  $error = "Wrong username/password combo";
	          echo $error;
	        }
	      }
	      else {
        //sanatize input
		    $name = mysqli_real_escape_string($db,$_POST['name']);
		    $lastName = mysqli_real_escape_string($db,$_POST['lastName']);
		    $myusername = mysqli_real_escape_string($db,$_POST['username']);
		    $email = mysqli_real_escape_string($db,$_POST['email']);
		    $mypassword = mysqli_real_escape_string($db,$_POST['password']);
		    $mypassword2 = mysqli_real_escape_string($db,$_POST['password2']);

		if($mypassword == $mypassword2) {
		  $id = uniqid();
		  $password = md5($mypassword);

		  $sql = "INSERT INTO user (userId, name, lastName, userName, email, password) VALUES('$id', '$name', '$lastName', '$myusername', '$email', '$password')";
		  if($db->query($sql) === TRUE) {
			  $mgs = "Successful Signup!";
		    echo $mgs;
			  mail($email, $mgs, $myusername );
		    session_start();
		    $_SESSION['login_user'] = $myusername;
		    $_SESSION['user_id'] = $id;
		    header("location: index.php?controller=homepageCtrl");
		  }
		  else {
		    echo "Error: " . $sql . "<br>" . $db->error;
		  }
		}
		else {
		  $error = "Incorrect password!";
		  echo $error;
		}
      }
    }

	    public function put() {}
	    public function delete() {}
	  }
