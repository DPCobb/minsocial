<?php

require_once 'vendor/mobiledetect/mobiledetectlib/Mobile_Detect.php';

 abstract class View
 {
     public $title;
     private $previous;
     public $detect;

     /**
      * sets the page title
      * @param string $title sets the page title
      */
     public function __construct($title)
     {
         $this->title = $title;
         $this->previous = $_SERVER["HTTP_REFERER"];
         $this->detect = new Mobile_Detect;
     }


     /**
      * head builds the html header
      * @return null
      */
     public function head()
     {
         echo '
         <!DOCTYPE html>
         <html lang="en">
         <head>
             <meta charset="utf-8">
             <meta name="viewport" content="width=device-width, initial-scale=1">
             <title>'.$this->title.'</title>
         </head>
         <body>
         ';
     }

     /**
      * nav builds the navigation
      * @return null
      */
     public function nav()
     {
         echo '
         <nav>

         </nav>
         <main>
         ';
     }
      public function footer()
      {
          echo'
          </main>
          <!-- End Main Body -->
          <!-- JS file -->
          </body>
          </html>
          ';
      }

      /**
       * buildDisplay builds out the view
       * @return null
       */
      public function buildDisplay()
      {
          // combine head, nav, footer for display
          $all = $this->head() . $this->nav() . $this->footer();
          // echo html
          echo $all;
      }
    }
