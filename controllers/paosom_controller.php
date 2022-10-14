<?php
    class PaosomController
    {

      
            public function index()
            {
               // $_SESSION['user_id'];
               $paosom = paosomModel::get($_SESSION['user_id']);

             
                  require_once('./views/paosom/index.php'); 
            }
        
        
    }
    
?>