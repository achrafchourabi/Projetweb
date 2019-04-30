<?php 

session_start ();  

if(!isset($_SESSION['l']) && !isset($_SESSION['p'] ) )
{
    header("location: http://localhost/Dashio/connecter.html");


}
else 
{
	session_destroy() ;

}

?>