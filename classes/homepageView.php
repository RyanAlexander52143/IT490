
	<?php
	  class homepageView {

	    public function getHeader() {

	      session_start();

	      $pageHeader = '<!DOCTYPE html>
	        <html>
	          <head>

	            <title>Home</title>

		 	</head>
		 	<body>';

	      return $pageHeader;
	    }


	    public function getNavBar() {

	      $navBar = '

	             <h1 >Welcome to your garage!</h1>
	             <h3 >'.$_SESSION['login_user'].'</h3>
	           </div>
	        </div>
	      ';

	      return $navBar;
	    }


	    public function getUserInventory($keys, $result) {

	      $userInventory = '
	        <br>

		 	    <h1>My Orders</h1>
		 	    <table>
		 	      <thead>
		 	        <tr>';
		 	          for($i=0; $i<count($keys); $i++){
		 	            if($keys[$i] != 'UserId') {
		 	              $userInventory .= '<th>'.$keys[$i].'</th>';
		 	            }
		 	          }
		 	          $userInventory .= '<th>Details</th>
		 	           <th>Edit</th></tr>
		 	      </thead>
		 	      <tbody>';
		 	        foreach($result as $record) {
		 	          $userInventory .= '<tr>';
		 	          for($i=0; $i<count($record); $i++) {
		 	            if($keys[$i] != 'UserId') {
		 	             if($keys[$i] == 'destination'){
		 	              $userInventory .= '<td>$ '.$record[$keys[$i]].'</td>';
		 	             }
		 	             else {
		 	              $userInventory .= '<td>'.$record[$keys[$i]].'</td>';
		 	             }
		 	            }
		 	          }
		 	          $userInventory .= '<td><a href="index.php?controller=detailCtrl&vin='.$record['truckID'].'">

		 	          </a></td>
		 	          <td><a href="index.php?controller=editCtrl&vin='.$record[truckID].'">

		 	          </a></td></tr>';
		 	        }
		 	      $userInventory .= '</tbody>
		 	    </table>
		 	  ';

		 	  return $userInventory;
	    }


	    public function getInventory($keys, $result) {

		  session_start();

	      $totalInventory = '<br>

		   			  <h1>Inventory</h1>
		   				<table>
		   					<thead>
		   						<tr>';
		   							for($i=0; $i<count($keys); $i++){
		   								if($keys[$i] != 'UserId') {
		   									$totalInventory .= '<th>'.$keys[$i].'</th>';
		   								}
		   							}
		   	   $totalInventory .='<th>Details</th></tr>
		   					</thead>
		   					<tbody>';
		   							foreach($result as $record) {
		   								$totalInventory .= '<tr>';
		   								for($i=0; $i<count($record); $i++) {
		   									if($keys[$i] != 'UserId') {
		   									 if($keys[$i] == 'Price'){
		 	              					  $totalInventory .= '<td>$ '.$record[$keys[$i]].'</td>';
		 	             					 }
											 else {
		   										$totalInventory .= '<td>'.$record[$keys[$i]].'</td>';
		   									 }
		   									}
		   								}
		   								$totalInventory .= '<td><a href="index.php?controller=detailCtrl&vin='.$record['truckID'].'">

		   								</a></td></tr>';
		   							}
		   		   $totalInventory .='</tbody>
		   				</table>
		   			';

	      return $totalInventory;
	    }


	    public function getButtons() {
	      $buttons = '
	        <br>

			    <a href="index.php?controller=truckFormCtrl">Add new truck</a>
			   <br>
			   <p>If for some reason the button isnt working, it may be due to your browser</p>

	              <form action="classes/logout.php" method="post">
	                <button type="submit">Logout</button>
	              </form>
	           ';

	        return $buttons;
	    }


	    public function getFooter() {

	      $footer = '</body>
	        </html>';

	      return $footer;
	    }
	 }
