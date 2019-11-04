<? php 

// Ex 1 : mettre le titre d'une tache dans une variable $title

$title= "ouvrir les rideaux"; 

// EX2: mettre [l'état d'accomplissement d'un tache] dans une variable $done

$done= false;

// Ex3: mettre dans une variable $task un tableau dont les clés sont "title" et "done", les variables précédentes correspondantes 
// => on applera se genre de tableau des "task"s dans la suite 

$task= ["title" => $title, "done" => $done];

// Ex4: Créer une fonction "get-status" qui prend en argument une "task" et renvoie l'état d'accomplissement

function get_status ($task) {
return $task ["done"];
}

// Ex5: Créer un tableau vide dans une variable $todo

$todo= [];

// Ex6: Ajouter la tache $task de l'ex 3 à la fin du tableau $todo

$todo= [$task];

// Ex7: stocker $todo dans la session (clé "todo")

$todo= $_SESSION ["todo"]; 

// Ex 8 : écrire une boucle foreach pour faire un var_dump des éléments de $todo

foreach ($todo as $t){

	 var_drump ($t) 
}

// Ex 9 : Rajouter d'autres éléments du même type que $task à $todo

$tsak2= [ "title"=> "Lire un livre" => false]
$tsak3= [ "title"=> "Manger une pomme" => true]

$todo[] = $task2;
$todo[] = $task3;

//ou 
//$todo=[ $task, $task2, $task3];

var_drump($todo);

// Ex 8bis : vérifier que la boucle de l'exercice 8 fonctionne toujours

foreach ($todo as $t){

	 var_drump ($t) 
}

// Ex 10 : Afficher, dans des <li> les titres des éléments de todo

<li> ouvrir les rideaux </li>
<li> Lire un livre </li>
<li> Manger une pomme </li> 


//Ex 11 : créer une fonction display_task prenant en paramètre une $task et renvoyant le titre dans une balise span, possédant une class "done" si la classe est faite. 

function display_task ($task) { 
$task ["done"= ture];
return $task ["title" => span];
}

// Ex 12 : Créer un tableau $recycle vide. À l'aide de la fonction array_splice, enlever un élément de votre choix de la variable $todo, placez le dans $recycle. Affichez $recylce à l'aide d'une boucle.

$input= todo ("task", "task2", "task3")

array_splice ($input, 2);
mixed $remplacement = recycle () 
var_drump ( $recycle);

// ou
array_splice ( todo &$input , int $offset [, int $length = count($input) [, mixed $replacement = recycle() ]] ) : todo; 
    var_drump ($recyle);
}

// Ex 10 bis : remplacer l'affichage du titre par l'appel à la fonction display_task

 <html>
<body> <h1> (function display_task ($task)) </h1>
 <?php function display_task ($task) { 
$task ["done"= ture];
return $task ["function display_task" => span]; }
 echo display_task ($task)?>
</body>
</html>