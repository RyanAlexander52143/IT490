<!doctype html>
<html>
    <head>

        <title></title>

    </head>
    <body>




	<?php
	  abstract class controller {
	    protected $html;

	    public function get() {}
	    public function post() {}
	    public function put() {}
	    public function delete() {}

	    public function getHTML() {
	      return $this->html;
	    }
	  }
	?>

    </body>
</html>
