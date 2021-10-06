<?php
    session_unset();
    session_destroy();

    header('Location: https://bolicho-alegrete.herokuapp.com/index.php');
?>