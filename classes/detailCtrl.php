<?php
 class detailCtrl extends controller {

  public function get() {

   session_start();
//allows us to make detailviews to add stuffto pages, and starts a session
   $details = new detailView;

   $pageHeader = $details->getHeader();
   $this->html .= $pageHeader;

   $navBar = $details->getNavBar();
   $this->html .= $navBar;

   $body = $details->getBody();
   $this->html .= $body;

   $footer = $details->getFooter();
   $this->html .= $footer;
  }




  public function post(){}
  public function put(){}
  public function delete(){}
 }
