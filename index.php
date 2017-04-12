<!doctype html>
<html>
    <head>

        <title>Party INC - Management</title>
    </head>
    <body>

        <p>Welcome!</p>

	<?php
  //set up function to load classes from folder
	  function autoLoader($className) {
	    include 'classes/'. $className. '.php'; //includes classes from folder
	  }

	  spl_autoload_register('autoLoader');

	  $app = new app; //starts mgmt interface silly rabbit, tricks are for kids
	?>

    </body>
</html>
