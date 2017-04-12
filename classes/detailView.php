<?php
 //
 // creates the basic form of the wbpage
 //

 class detailView {

  public function getHeader() {
   session_start();

   $pageHeader = '<!DOCTYPE html>
    <html>
     <head>

      <title>Edit Entity</title>

     </head>

     <body>';

     return $pageHeader;
  }


  public function getNavBar() {
    //can remove if needed
   $navBar = '
    <br>

      <h3 >'.$_SESSION['login_user'].'</h3>
     ';

   return $navBar;
  }

  public function getBody() {
    // body for truck detail
    $body = '
     <br><br><br>

      <h2 >Add/Edit Truck</h2>
      <br>

       <form action="index.php?controller=truckformCtrl" method="post">
        <input type="text" name="truck" >
	<br><br><br>
	<select >

  <!-- TODO add dropdown options if needed -->

	</select>
	<br><br><br>
	<button type="submit" >Submit</button>
       </form>
      ';

    return $body;
  }


   public function getFooter() {
    $footer = '</body>
     </html>';

    return $footer;
   }

 }
