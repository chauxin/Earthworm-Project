<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["reload"])) {

    header("Location: Server.php");
    exit; 
}
?>