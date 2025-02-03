<?php
require_once 'config.php';

if (isset($_GET['task_id'])) {
    $task_id = intval($_GET['task_id']); // Convert to integer to prevent SQL injection

    $deletingtasks = mysqli_query($db, 
        "DELETE FROM `task` WHERE `task_id` = $task_id")
        or die(mysqli_error($db));

    header("Location: index.php");
}
?>

