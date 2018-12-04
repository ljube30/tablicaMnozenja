<?php
    class Calculator {
        var $result;
        
        /* Funkcija za racunanje proizvoda */
        function calculate($firstN, $secondN)
        {
            $result = $firstN * $secondN;
            return $result;
        }
        
    }
?>