<?php
if(isset($_POST['kill'])){
    session_destroy();
    header("location:index.php");
}
?>