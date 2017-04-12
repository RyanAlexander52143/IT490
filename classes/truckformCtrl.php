<?php

 class truckformCtrl extends controller {

  public function get() {

   session_start();

   $truckForm = new truckformView;

//build html for truck form
   $pageHeader = $truckForm->getHeader();
   $this->html .= $pageHeader;

   $navBar = $truckForm->getNavBar();
   $this->html .= $navBar;

   $body = $truckForm->getBody();
   $this->html .= $body;

   $footer = $truckForm->getFooter();
   $this->html .= $footer;
  }

  public function post() {
   session_start();

   //id from the post form
   $truckID = $_POST['truckID'];

   //setup data to make the DB query
   $userid = $_SESSION['user_id']; //if needed
   $make = $response->make->name; //will get truck type
  


   //TODO add proper db info
   //sql prep
   //needed just for testing for now
   define('DB_SERVER', 'sql2.njit.edu');
   define('DB_USERNAME', 'rra27';
   define('DB_PASSWORD', 'HffMudpt1');
   define('DB_DATABASE', 'rra27');
   $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

   //sql query
   //TODO impliment correct table and values
   // we can remove userid if needed
   $sql = "INSERT INTO Truck (FleetNum,Driver,FromDestination,Fuel,Loader,ToDestination,VehicleType)
   VALUES('$FleetNum', '$Driver', '$FromDestination', '$Fuel', '$Loader', '$ToDestination','$VehicleType')";

   if($db->query($sql) === TRUE) {
    echo "Add successful";
    header("location: index.php?controller=homepageCtrl");
   }
   else {
    echo "Error: " . $sql . "<br>" . $db->error;
   }
  }

  public function put() {}
  public function delete() {}

 }
