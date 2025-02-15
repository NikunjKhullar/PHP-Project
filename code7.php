<?php

    	// Class definition
    	class greeting
    	{
        	// properties
        	public $str = "Hello World!";
        
        	// methods
        	function show_greeting()
        	{
            		return $this->str;
        	}
    	}
     
    	// Create object from class
    	$message = new greeting;
    	var_dump($message);
	echo "<br><br>";
	echo "Executed by Nikunj Khullar(0221BCA131)(2220100306)";
?>