<DOCTYPE html>

	<html>
	
		<head>
		</head>
	
		<?php
			include 'menu.html';
		?>
	
	
	
		<body>
		
		<?php
			require 'param.php';
			mysql_connect($host,$user,$password) or die('Erreur le connexion au SGBD.');
			mysql_select_db($base) or die('La base de données n\'existe pas');
			
			$query='SELECT * FROM skis';
			$rep=mysql_query($query);
			
			mysql_close();
			
			while($a=mysql_fetch_object ($rep))
			{
				$ref=$a->reference;
				$nom=$a->intitule;
				$des=$a->descriptif;
				$euros=$a->prix;
				echo("<table style=\"margin-bottom:30px; border:1px solid grey;\"> 
							<tr>
								<td>$ref</td>
							</tr>
							<tr>
								<td>$nom</td>
							</tr>
							<tr>
								<td>$des</td>
							</tr>
							<tr>
								<td>$euros</td>
							</tr>
						</tables>");
			}			
		?>
		
		</body>
	
	
	
	
	
	</html>