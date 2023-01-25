<?php
namespace App\Classes;

class redirect{

    public function redirect($redirect = null){
        if(is_null($redirect)){
           return header('location:/');
        }
        return header('location:$redirect');
    }

}