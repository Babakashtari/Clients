<?php
    if(isset($_POST['destination_country'])){
        $destination_country = $data_clean_up->test_input($regular_expressions['destination_country'], $_POST['destination_country']);
        if(!empty($destination_country)){
            $_SESSION['destination_country'] = $destination_country;
        }else{
            array_push($errors, "کشور مقصد به درستی وارد نشده است");
        }
    }else{
        array_push($user_returned, "کشور مقصد خود را مجددا وارد کنید.");
    }
?>