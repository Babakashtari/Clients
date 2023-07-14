<?php
    if($_POST['immigration_type'] == "بازگشت به مرحله قبل"){
        array_push($user_returned, "نوع ویزای خود را وارد کنید.");
    }else{
        $immigration_type = $data_clean_up->test_input($regular_expressions['immigration_type'], $_POST['choose_immigration_type']);
        if(!empty($immigration_type)){
            $_SESSION['immigration_type'] = $immigration_type;
            if(isset($_SESSION['destination_country'])){
                    if($_SESSION['destination_country'] == "USA"){
                        if($immigration_type == "temporary_stay"){
                            require "PHP/generate_American_temporary_stay_visas.php";
                        }elseif($immigration_type == "permanent_residence"){
                            require "PHP/generate_American_permanent_visas.php";
                        }            
                    }elseif($_SESSION['destination_country'] == "CANADA"){
                        if($immigration_type == "temporary_stay"){
                            require "PHP/generate_Canadian_temporary_stay_visas.php";
                        }elseif($immigration_type == "permanent_residence"){
                            require "PHP/generate_Canadian_permanent_visas.php";
                        }            
                    }elseif($_SESSION['destination_country'] == "AUSTRALIA"){
                        if($immigration_type == "temporary_stay"){
                            require "PHP/generate_Australian_temporary_stay_visas.php";
                        }elseif($immigration_type == "permanent_residence"){
                            require "PHP/generate_Australian_permanent_visas.php";
                        }            
                    }else{
                        array_push($errors, "کشور مقصد معلوم نیست. لطفا دوباره از اول مراحل ثبت نام را انجام دهید."); 
                    }
            }else{
                array_push($errors, "کشور مقصد معلوم نیست. لطفا دوباره از اول مراحل ثبت نام را انجام دهید.");
            }    
        }else{
            array_push($errors, "نوع ویزا به درستی وارد نشده است.");
        }
    }
?>