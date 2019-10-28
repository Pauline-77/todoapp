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