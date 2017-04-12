<?php
 class editView {

  public function getHeader() {
   session_start();

   $pageHeader = '<!DOCTYPE html>
    <html >
     <head>

      <title>Add</title>

     </head>

     <body>';

     return $pageHeader;
  }

  public function getNavBar() {
   $navBar = '

      <h3 style="color:white">'.$_SESSION['login_user'].'</h3>';

   return $navBar;
  }


  public function getBody($truck, $truckID) {

    //get info from table. should follow the following format:
    $truckModel = $Trucks['Make'];

    //TODO we'll need an input for each field we want
    $body = '
     <br><br><br>

      <h2 >'.$truckModel.'&nbsp'.$truckID.'</h2>
      <br>

       <form action="index.php?controller=editCtrl" method="post">
        <h3 >Price: </h3><br>
        <input type="text" placeholder="ID" name="TruckID" value="'.$truckID.'">
        <br><br><br>

	<button type="submit" >Submit</button>
       </form>
       <br>
       <form action="index.php?controller=editCtrl&action=delete" method="post">
      
         <button type="submit" >Delete Truck</button>
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
