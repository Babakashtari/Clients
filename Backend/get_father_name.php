<?php
    if(empty($_POST['first_name']) && empty($_POST['last_name'])){
        array_push($user_returned, "نام پدر خود را واردکنید.");
    }elseif(empty($_POST['first_name']) || empty($_POST['last_name'])){
        array_push($errors, "نام و نام خانوادگی پدر هر دو اجباری هستند.");
    }else{
        $father_first_name = $data_clean_up->test_input($regular_expressions['first_name'], $_POST['first_name']);
        if(!empty($father_first_name)){
            $_SESSION['father_first_name'] = $father_first_name;
        }else{
            array_push($errors, "نام پدر فقط می تواند حروف کوچک و بزرگ انگلیسی باشد.");
        }
        $father_last_name = $data_clean_up->test_input($regular_expressions['last_name'], $_POST['last_name']);
        if(!empty($father_last_name)){
            $_SESSION['father_last_name'] = $father_last_name;
        }else{
            array_push($errors, "نام فامیلی پدر فقط می تواند حروف کوچک و بزرگ انگلیسی باشد.");
        }
    }
?>