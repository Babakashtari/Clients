<?php
    if($_POST['mother_name'] == "بازگشت به مرحله قبل"){
        array_push($user_returned, "نام مادر خود را واردکنید.");
    }elseif(empty($_POST['first_name']) && empty($_POST['last_name'])){
        array_push($errors, "نام و نام خانوادگی مادر اجباری هستند.");
    }elseif(empty($_POST['first_name']) || empty($_POST['last_name'])){
        array_push($errors, "نام و نام خانوادگی مادر هر دو اجباری هستند.");
    }else{
        $mother_first_name = $data_clean_up->test_input($regular_expressions['first_name'], $_POST['first_name']);
        if(!empty($mother_first_name)){
            $_SESSION['mother_first_name'] = $mother_first_name;
        }else{
            array_push($errors, "نام مادر فقط می تواند حروف کوچک و بزرگ انگلیسی باشد.");
        }
        $mother_last_name = $data_clean_up->test_input($regular_expressions['last_name'], $_POST['last_name']);
        if(!empty($mother_last_name)){
            $_SESSION['mother_last_name'] = $mother_last_name;
        }else{
            array_push($errors, "نام فامیلی مادر فقط می تواند حروف کوچک و بزرگ انگلیسی باشد.");
        }
    }
?>