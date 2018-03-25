<?php

class Views
{
    public function displayView($filename="", $result=array())
    {
        $file = 'app/views/' . $filename . '.php';
        include $file;
    }
}

?>
