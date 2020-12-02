<?php

require_once('../models/userService.php');

if(isset($_REQUEST['submit'])){
    
    if(!empty($_REQUEST['username']) and !empty($_REQUEST['password'])){
        
        if(userLogin($_REQUEST['username'], $_REQUEST['password'])){
            
            header('location: ../view/login.php?msg=login_completed');
            
        }
        
        else{
            
            header('location: ../view/login.php?msg=login_failed');
            
        }
        
    }
    
    else{
        
        header('location: ../view/login.php?msg=null');
        
    }
    
}



?>