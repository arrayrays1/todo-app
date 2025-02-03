<?php
require_once 'config.php';

if (isset($_GET['task_id'])) {
    $task_id = intval($_GET['task_id']);

    $updatingtasks = mysqli_query($db, 
        "UPDATE `task` SET `status` = 'Done' WHERE `task_id` = $task_id")
        or die(mysqli_error($db));

    header('Location: index.php');
}
?>

