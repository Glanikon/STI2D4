<html>
 <head>
  <title> Information sur le Terrarium. </title>
 </head>
  <body> 
   <?php
    if (($_GET["login"] == "svtpadmin") && ($_GET["motpasse"] == "latourelle"))
	 {
	     header('Location: Pageprincipale.php');
     }
	else
	      echo "Impossible de se connecter, Login ou Mot de passe incorrecte.";
		  
   ?>
  </body>
</html>