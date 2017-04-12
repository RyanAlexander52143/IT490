<!doctype html>
<html>
    <head>

        <title></title>


    </head>
    <body>



	<?php
  // app class contains methods to print put page html
	  class app {
	    public function __construct() {
	      $controller = 'loginCtrl'; //set up a login controller

	      if(isset($_REQUEST['controller'])) {
	        $controller = $_REQUEST['controller'];
	      }

	      $route = new $controller;
	      $request_method = $_SERVER['REQUEST_METHOD'];

	      $route->$request_method();
	      $page_output = $route->getHTML();
	      echo $page_output;
	    }
	  }
	?>


    </body>
</html>
<?php
