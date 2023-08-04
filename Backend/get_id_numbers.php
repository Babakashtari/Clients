<?php
    if($_POST['id_numbers'] == "بازگشت به مرحله قبل"){
        array_push($user_returned, "کد ملی و شناسنامه خود را واردکنید.");
    }else{
        if(empty($_POST['passport_number'])){
            array_push($errors, "شماره پاسپورت الزامی است.");
        }
        if(empty($_POST['national_id_number'])){
            array_push($errors, "کد ملی الزامی است.");
        }
        if(empty($_POST['birth_certificate_number'])){
            array_push($errors, "شماره شناسنامه الزامی است.");
        }
        if(empty($errors)){
            $national_id_number = $data_clean_up->test_input($regular_expressions['national_id_number'], $_POST['national_id_number']);
            if(!empty($national_id_number)){
                $_SESSION['national_id_number'] = $national_id_number;
            }else{
                array_push($errors, "کد ملی به درستی وارد نشده است.");
            }
            $passport_number = $data_clean_up->test_input($regular_expressions['passport_number'], $_POST['passport_number']);
            if(!empty($passport_number)){
                $_SESSION['passport_number'] = $passport_number;
            }else{
                array_push($errors, "شماره پاسپورت به درستی وارد نشده است.");
            }
            $birth_certificate_number = $data_clean_up->test_input($regular_expressions['birth_certificate_number'], $_POST['birth_certificate_number']);
            if(!empty($birth_certificate_number)){
                $_SESSION['birth_certificate_number'] = $birth_certificate_number;
            }else{
                array_push($errors, "شماره شناسنامه به درستی وارد نشده است.");
            }
        }    
    }
?>