<?php
    if($_POST['name'] == "بازگشت به مرحله قبل"){
        array_push($user_returned, "نام خود را واردکنید.");
    }elseif(empty($_POST['first_name']) && empty($_POST['last_name'])){
        array_push($errors, "نام و نام خانوادگی اجباری هستند.");
    }elseif(empty($_POST['first_name']) || empty($_POST['last_name'])){
        array_push($errors, "نام و نام خانوادگی هر دو اجباری هستند.");
    }else{
        $first_name = $data_clean_up->test_input($regular_expressions['first_name'], $_POST['first_name']);
        if(!empty($first_name)){
            $_SESSION['first_name'] = $first_name;
        }else{
            array_push($errors, "نام فقط می تواند حروف کوچک و بزرگ انگلیسی باشد.");
        }
        $last_name = $data_clean_up->test_input($regular_expressions['last_name'], $_POST['last_name']);
        if(!empty($last_name)){
            $_SESSION['last_name'] = $last_name;
        }else{
            array_push($errors, "نام فامیلی فقط می تواند حروف کوچک و بزرگ انگلیسی باشد.");
        }
        $gender = $data_clean_up->test_input($regular_expressions['gender'], $_POST['gender']);
        if(empty($gender)){
            array_push($errors, "جنسیت خود را انتخاب کنید.");
        }else{
            $_SESSION['gender'] = $gender;
        }
        $marital_status = $data_clean_up->test_input($regular_expressions['marital_status'], $_POST['marital_status']);
        if(empty($marital_status)){
            array_push($errors, "وضعیت تاهلتان راانتخاب کنید.");
        }else{
            $_SESSION['marital_status'] = $marital_status;
        }
    }
?>