<?php

$servername = "localhost";

$username = "estebes";

$password = "estebes";

$name = "estebes";



$db = mysqli_connect($servername, $username, $password, $name);


function filterInput($input)
{
        
$cinput = preg_replace('/\'/','',$input);
        
$cinput = preg_replace('/\"/','',$cinput);
        
$cinput = preg_replace('/\</','',$cinput);
        
$cinput = preg_replace('/\>/','',$cinput);
        
$cinput = preg_replace('/script/','',$cinput);
        
$cinput = preg_replace('/javascript/','',$cinput);

        
return $cinput;
}
?>