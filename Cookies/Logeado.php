<?php


if(isset($_session['Usuario']))
{
	echo "Bienvenido". $_session['Usuario'];
}
else
{
	echo "No está loggeado";
}



?>