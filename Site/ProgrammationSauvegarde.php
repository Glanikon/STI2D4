
<?php
	$i=0;
	$Terrarium[0]=$_GET["Lum"];
	$Terrarium[1]=$_GET["Temp"];
	$Terrarium[2]=$_GET["Hum"];
	$Fichier_Sauvegarde = fopen("Donnees.txt","w");
	
	for($i=0;$i<3;$i++)
	{
		fputs($Fichier_Sauvegarde,$Terrarium[$i]."\n");
	}	
	fclose($Fichier_Sauvegarde);		
