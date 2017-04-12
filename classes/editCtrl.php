<?php
//allows us to edit entities
  class editCtrl extends controller {

    public function get() {

      session_start();

      $editPage = new editView;

      $pageHeader = $editPage->getHeader();
   	  $this->html .= $pageHeader;

   	  $navBar = $editPage->getNavBar();
      $this->html .= $navBar;

      $truckID = $_GET['truckID'];


      //sql prep
      include 'classes/config.php';

      //sql query
      $sql = "SELECT * FROM Trucks WHERE TruckID = '$truckID'";
      $response = $db->query($sql);
      $row = $response->fetch_assoc();

      $body = $editPage->getBody($row, $truckID);
      $this->html .= $body;

      $footer = $editPage->getFooter();
      $this->html .= $footer;

    }

    public function post() {

      session_start();
      $truckID = $_POST['truckID'];

      //sql prep
      // NOTE SQL INFO MIGHT NEED TO BE ADDED TO THIS SECETION OR IT MIGHT NOT WORK

      if($_GET['action'] == "delete"){

        //sql query
        $sql = "DELETE FROM Truck WHERE truckID = '$truckID'";

        if($db->query($sql) === TRUE) {
          echo "Entry deleted successfully";
          header("location: index.php?controller=homepageCtrl");
        }
        else {
          echo "Error: " . $sql . "<br>" . $db->error;
        }

      }
      else {

        $newPrice = $_POST['price'];
        $condition = $_POST['cond'];

        //sql query
        //TODO add proper values
        $sql = "UPDATE Trucks SET field = '', field = '' WHERE truckID = '$truckID'";

        if($db->query($sql) === TRUE){
          echo "Truck updated successfully";
          header("location: index.php?controller=homepageCtrl");
        }
        else {
          echo "Error: " . $sql . "<br>" . $db->error;
        }
      }

    }

    public function put() {}
    public function delete() {}

  }
