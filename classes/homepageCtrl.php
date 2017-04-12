
	<?php
	  class homepageCtrl extends controller {

	    public function get() {

	      session_start();
	      //print_r($_SESSION);
				//define('DB_SERVER', 'sql1.njit.edu');
				//define('DB_USERNAME', '');
				//define('DB_PASSWORD', '');
				//define('DB_DATABASE', '');
	      //$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

	      $sql = "SELECT * FROM Inventory WHERE userId='".$_SESSION['user_id']."'";
	      $result = mysqli_query($db, $sql);
	      $row = $result->fetch_assoc();
	      $keys = (array_keys($row));

	      $homepage = new homepageView;

	      $pageHeader = $homepage->getHeader();
	      $this->html .= $pageHeader;

	      $navBar = $homepage->getNavBar();
	      $this->html .= $navBar;

	      if($row != 0) {
	        $userInventory = $homepage->getUserInventory($keys, $result);
	        $this->html .= $userInventory;
	      }

        //TODO verify table names
	      $sql = "SELECT * FROM Trucks";
	      $result = mysqli_query($db, $sql);
	      $row = $result->fetch_assoc();
	      $keys = (array_keys($row));

	      $inventoryTable = $homepage->getInventory($keys, $result);
	      $this->html .= $inventoryTable;

	      $buttons = $homepage->getButtons();
	      $this->html .= $buttons;

	      $footer = $homepage->getFooter();
	      $this->html .= $footer;
	    }

	    public function post() {}
	    public function put() {}
	    public function delete() {}
	  }
