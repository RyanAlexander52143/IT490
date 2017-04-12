<?php
 class truckformView {

  public function getHeader() {
   session_start();
  //next few vars are basic html
   $pageHeader = '<!DOCTYPE html>
    <html >
     <head>

      <title>Car Form</title>

     </head>

     <body>';

     return $pageHeader;
  }

  public function getNavBar() {
   $navBar = '
    <br>

      <h3>'.$_SESSION['login_user'].'</h3>
     ';

   return $navBar;
  }

  public function getBody() {
    //code for the body, can be adapted based on what we need
    $body = '
     <br><br><br>

      <h2>New Truck</h2>
      <br>

       <form action="index.php?controller=truckformCtrl" method="post">
        <input type="text" placeholder="ID #" name="truckID" >
	<br><br><br>
	<select>
	 <option selected disabled>To or From/option>
	 <option value="used">To</option>
	 <option value="new">From</option>
	</select>
  <input tpye="text" placeholder="ex, NWK,PHL" name="destination">
	<br><br><br>
	<button type="submit">Submit</button>
       </form>';

    return $body;
  }

  public function getFooter() {
    $footer = '</body>
     </html>';

    return $footer;
   }
 }
