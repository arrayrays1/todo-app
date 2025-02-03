<?php
require_once 'config.php';

if (isset($_POST['add'])) {
    if (!empty($_POST['task'])) {
        $task = mysqli_real_escape_string($db, $_POST['task']);

        $addtasks = mysqli_query($db, 
            "INSERT INTO `task` (`task`, `status`) VALUES ('$task', 'Pending')")
            or die(mysqli_error($db));
        
        header('Location: index.php');
    }
}
?>

