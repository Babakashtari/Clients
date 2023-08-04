<?php
    if($_POST['father_name'] == "بازگشت به مرحله قبل"){
        array_push($user_returned, "نام پدر خود را واردکنید.");
    }elseif(empty($_POST['first_name']) && empty($_POST['last_name'])){
        array_push($errors, "نام و نام خانوادگی پدر اجباری هستند.");
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
    if(empty($_POST['father_alive'])){
        array_push($errors, "آیا پدر در قید حیات هستند؟");
    }else{
        $father_alive = $data_clean_up->test_input($regular_expressions['alive'], $_POST['father_alive']);
        if(!empty($father_alive)){
            if($father_alive == 'YES'){
                $_SESSION['father_alive'] = "YES";
            }else{
                $_SESSION['father_alive'] = "NO";
                if(!empty($_POST['father_decease_date'])){
                    $father_decease_date = $data_clean_up->test_input($regular_expressions['date'], $_POST['father_decease_date']);
                    if(empty($father_decease_date)){
                        array_push($errors, "تاریخ درست وارد نشده است. تاریخ را به فرمت: dd-mm-yyyy وارد کنید.");
                        array_push($errors, "چک کنید اعداد روز، ماه و سال منطقی وارد شده باشند.");
                    }else{
                        $_SESSION['father_decease_date'] = $father_decease_date;
                    }
                    if(!empty($_POST['father_place_of_decease'])){
                        $father_place_of_decease = $data_clean_up->test_input($regular_expressions['place'], $_POST['father_place_of_decease']);
                        if(!empty($father_place_of_decease)){
                            $_SESSION['father_place_of_decease'] = $father_place_of_decease;
                        }else{
                            array_push($errors, "محل وفات را به لاتین (حروف انگلیسی) بنویسید");
                        }
                    }else{
                        array_push($errors, "محل وفات پدر را ذکر کنید.");
                    }
                }else{
                    array_push($errors, "تاریخ فوت پدر را وارد کنید.");
                }
            }    
        }else{
            array_push($errors, "حیات پدر درست وارد نشده است");
        }
    }
?>