
<?php 
//load file moel
include "models/HomeModel.php";
   class HomeController extends Controller{
      //ke thua model
     use HomeModel;
      public function index(){
         $this->loadView("HomeView.php");
      }
   }
 ?>