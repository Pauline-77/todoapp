<?php
function get_status ($task) {
return $task ["done"];
}

function display_task ($task) { 
$done= get_status($task);
if ($done) { 
$class="done";
} else{ 
$class=""; 
}
return "<span class='$class'>".$task ["title"]."</span>";
}