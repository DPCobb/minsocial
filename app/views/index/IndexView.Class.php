<?php

require 'app/views/View.Class.php';

class IndexView extends View
{
    /**
     * set the title
     * @param string $title page title
     */
    public function __construct($title)
    {
        parent::__construct($title);
    }

    public function body(){
        echo'
            <h1>Hello from the view folder for index.</h1>
        ';
    }
    /**
     * buildDisplay builds out the view
     * @return null
     */
    public function buildDisplay()
    {
        $all = $this->head() . $this->nav() . $this->body() . $this->footer();
        echo $all;
    }
}

?>
