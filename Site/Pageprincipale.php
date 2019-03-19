<html>
 <head>
  <title> information sur le Terrarium </title>
  <link rel="stylesheet" href="main.css"/>
 </head>
  <body>
   <?php
    $Donnees = fopen("Donnees.txt","r");
   ?>
   <div align="center">
    <h1> Donnees du Terrarium </h1>
	 <table class="table">
	  <tr>
	   <td> Luminosite (en lux) </td>
	   <td>
	    <?php
		 $Lum = fgets($Donnees,10);
		 echo "$Lum";
		?>
	   </td>
	  </tr>
	  <tr>
	   <td> Temperature (en C) </td>
	   <td>
	    <?php
		$Temp = fgets($Donnees,10);
		echo "$Temp";
		?>
	   </td>
	  </tr>
	  <tr>
	   <td> Humidite (en %) </td>
	   <td>
	    <?php
		$Hum = fgets($Donnees,10);
		echo "$Hum";
		?>
	   </td>
	  </tr>
	 </table>
	</div>
   <?php
   fclose($Donnees);
   ?>
   &nbsp;
   <div align="center">
   <img src="terra cam.jpg" width= "40%"/>
   </div>
	&nbsp
	<div class="alerte" align="center">
	 <p> Message d'alerte </p>
	 <img src="Warning.png" width="15%" align="left"/>
	 <p> En cas de problème urgent, un message ici vous le signalera : </p>
	 <p> Aucun problème notable pour l'instant. </p>
	 <div id="div_horloge"></div>
 
<script type="text/javascript">
window.onload=function() {
  horloge('div_horloge');
};
 
function horloge(el) {
  if(typeof el=="string") { el = document.getElementById(el); }
  function actualiser() {
    var date = new Date();
    var str = date.getHours();
    str += ':'+(date.getMinutes()<10?'0':'')+date.getMinutes();
    str += ':'+(date.getSeconds()<10?'0':'')+date.getSeconds();
    el.innerHTML = str;
  }
  actualiser();
  setInterval(actualiser,1000);
}
</script>
	</div>
   </table>
  </body>
</html>
   
   