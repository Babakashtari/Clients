<?php
session_start();
if(isset($_POST['start'])){
    $_SESSION['initiate'] = true;
}
?>