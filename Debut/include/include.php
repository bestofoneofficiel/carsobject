<?php // toujours inclure les parents en premier
		
	// Interfaces
	include('./Interface/AnimalInterface.php'); 
	include('./Interface/ChatInterface.php');
	include('./Interface/RongeurInterface.php'); 
	include('./Interface/LapinInterface.php'); 

	// Exceptions
	include('./exception/rongeurException.php');

	// Classes
	include('./class/Animal.php'); 
	include('./class/Chien.php'); 
	include('./class/Chat.php'); 
	include('./class/Rongeur.php'); 
	include('./class/Lapin.php'); 

	
