<? php 

// Ex 1 : mettre le titre d'une tache dans une variable $title

$title= "ouvrir les rideaux"; 

// EX2: mettre [l'état d'accomplissement d'un tache] dans une variable $done

$done= false;

// Ex3: mettre dans une variable $task un tableau dont les clés sont "title" et "done", les variables précédentes correspondantes 
// => on applera se genre de tableau des "task"s dans la suite 

$task= ["title" => $title, "done" => $done];

// Ex4: Créer une fonction "get-status" qui prend en argument une "task" et renvoie l'état d'accomplissement

function get_status ($task,$title)
return= $done;

// Ex5: Créer un tableau vide dans une variable $todo

$todo= [empty] 

// Ex6: Ajouter la tache $task de l'ex 3 à la fin du tableau $todo

$todo= [ empty, $task] 

// Ex7: stocker $todo dans la session (clé "todo")

$SESSION(['todo'])=$todo;

// Ex 8 : écrire une boucle foreach pour faire un var_dump des éléments de $todo

$arr= 

foreach ($arr as $todo){

	 var_drump ($todo)
    
}

// Ex 9 : Rajouter d'autres éléments du même type que $task à $todo


// Ex 8bis : véridier que la boucle de l'exercice 8 fonctionne toujours


// Ex 10 : Afficher, dans des <li> les titres des éléments de todo


//Ex 11 : créer une fonction display_task prenant en paramètre une $task et renvoyant le titre dans une balise span, possédant une class "done" si la classe est faite.


// Ex 10 bis : remplacer l'affichage du titre par l'appel à la fonction display_task

// https://github.com/smwhr/todoapp/blob/master/preliminaries.php