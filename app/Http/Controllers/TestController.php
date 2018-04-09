<?php

namespace smartApp\Http\Controllers;

use Illuminate\Http\Request;
use smartApp\Http\Requests;
use smartApp\Http\Controllers\Controller;

class TestController extends Controller
{ 
   public function index(){
      echo "<br>Test Controller.";
   }
}

?>