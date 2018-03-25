<?php
require 'app/views/index/IndexView.Class.php';

if(!$_SESSION['id']){
    $view = new IndexView('min');
    $view->buildDisplay();
}
else{
    // need to verify the session information and then build the home page
    $view = new HomeView('min');
    $view->buildDisplay();
}
 ?>
