<?php 
session_start();

// $errors = "";


//$SESSION =  ; 
//$POST= "form" ;  
//$Corbeille = ;

//$tache1= "faire une app";



?> 

 <!DOCTYPE html>
<html lang="fr">
    <meta charset="utf-8">
    <style type="text/css"> 
    
    </style>
    <head> 
         <title>to do app</title>
    </head>
    <body>

    <form method="POST" action="index.php">
    <input type="text" name="tache"><br>
    <button type="submit">Ajouter</button>
    </form>
 
    <h2>Tâche à faire</h2>
<table>
    <tr>
    	<td> Faire une app</td>
    	<td> Manger des chips</td>
    	<td> Cocher des trucs</td>
    </tr>
</table>

    <h2>Corbeille</h2>
<table>
    <tr>
    	<td>Acheter des chips</td>
    </tr>
    
     </body>
</html>

