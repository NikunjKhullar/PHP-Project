<?php

        /* example 1 */
        echo "First Way \t";
        for ($i = 1; $i <= 10; $i++)
        {
            echo $i;
    	    echo "\t";
        }
    
        /* example 2 */
        echo "<br>Another Way\t";
        for ($i = 1; ; $i++)
        {
            if ($i > 10)
            {
                break;
            }
            echo $i;
    	    echo "\t";
        }
        echo "<br><br>";
        echo "Executed by Nikunj Khullar(0221BCA131)(2220100306)";

?>