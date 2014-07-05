<?php 


/**
*	Panada Hashing
*	@copy 2014 Ardha Herdianto
*
*/

namespace Libraries;
use Resources;

class panadaHash{
    
    function __construct(){
        //set up at the first time
    	$key='abcdefghijklmnopqrstuvwxyz1234567890!@#$%^&*()'; 
    	$this->crypt=new Resources\Encryption($key);
    }

    function first($string){
    	$first=hash('sha256',$string);
    	return $first;
    }

    function second($string){
    	$second=hash('sha1', $string);
    	return $second;
    }

    function third($string){
    	$third=hash('md5',$string);
    	return $third;
    }
    
    function output($string){
    	$result=$this->first($string);
    	$result=$this->second($result);
    	$result=$this->third($result);
    	$result=$this->crypt->encrypt($result);
        return $result;
    }
}
