<?php

if (isset($_POST['texte']))
	{
		$monmail='corine.gallo@wanadoo.fr';
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$email=$_POST['email'];
		$texte=$_POST['texte'];
		$sujet=$_POST['sujet'];
		$envoi="ce message vous a été envoyé par: ".$email.$texte;
		mail($monmail,$sujet,$envoi);
		header("location:page6.html");
	}
else
	{
		echo "l'envoi n'a pas fonctionné=";
	}
	
?>