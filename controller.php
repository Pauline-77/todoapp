<?php

session_start();
include "utils.php";

$todo = $_SESSION["todo"] ?? [];
$recycle = $_SESSION["recycle"] ?? [];



if (isset($_POST['action']) 
&& $_POST['action'] == "add_task")
{
$title = $_POST['title'];
$accompli = false;  
$newTask = ["title" =>$title, "done" => $accompli];

$todo[] = $newTask; 
$_SESSION["todo"] = $todo; 
}


if (isset($_POST['action']) 
&& $_POST ['action'] == "mark_done")
{ 

// marquer la tâche comme faite

$task_number = $_POST["task_number"];
$todo[$task_number]["done"] = true;

$_SESSION["todo"]=$todo; 
}

//supprimer une tâche 

if (isset ($_POST['action'])
&& $_POST['action'] == "move_to_recycle")
{

$task_number = $_POST["task_number"];
list ($toRecycle) = array_splice ($todo,$task_number,1); 
$recycle[] = $toRecycle;

// on sauvegarde

$_SESSION["todo"] = $todo;
$_SESSION["recycle"] = $recycle;
}

// rajouter un bouton restaurer

if (isset ($_POST['action'])
&& $_POST['action'] == "restaurer")
{

$task_number = $_POST["task_number"];
list ($toRestaurer) = array_splice ($recycle,$task_number,1); 
$todo[] = $toRestaurer;

$_SESSION["todo"] = $todo;
$_SESSION["recycle"] = $recycle;
}









