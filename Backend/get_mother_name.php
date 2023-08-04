<?php
    if($_POST['mother_name'] == "بازگشت به مرحله قبل"){
        array_push($user_returned, "نام مادر خود را واردکنید.");
    }elseif(empty($_POST['mother_first_name']) && empty($_POST['mother_last_name'])){
        array_push($errors, "نام و نام خانوادگی مادر اجباری هستند.");
    }elseif(empty($_POST['mother_first_name']) || empty($_POST['mother_last_name'])){
        array_push($errors, "نام و نام خانوادگی مادر هر دو اجباری هستند.");
    }else{
        $mother_first_name = $data_clean_up->test_input($regular_expressions['first_name'], $_POST['mother_first_name']);
        if(!empty($mother_first_name)){
            $_SESSION['mother_first_name'] = $mother_first_name;
        }else{
            array_push($errors, "نام مادر فقط می تواند حروف کوچک و بزرگ انگلیسی باشد.");
        }
        $mother_last_name = $data_clean_up->test_input($regular_expressions['last_name'], $_POST['mother_last_name']);
        if(!empty($mother_last_name)){
            $_SESSION['mother_last_name'] = $mother_last_name;
        }else{
            array_push($errors, "نام فامیلی مادر فقط می تواند حروف کوچک و بزرگ انگلیسی باشد.");
        }    
    }
    if(empty($_POST['mother_alive'])){
        array_push($errors, "آیا مادر در قید حیات هستند؟");
    }else{
        $mother_alive = $data_clean_up->test_input($regular_expressions['alive'], $_POST['mother_alive']);
        if(!empty($mother_alive)){
            if($mother_alive == 'YES'){
                $_SESSION['mother_alive'] = "YES";
            }else{
                $_SESSION['mother_alive'] = "NO";
                if(!empty($_POST['mother_decease_date'])){
                    $mother_decease_date = $data_clean_up->test_input($regular_expressions['date'], $_POST['mother_decease_date']);
                    if(empty($mother_decease_date)){
                        array_push($errors, "تاریخ درست وارد نشده است. تاریخ را به فرمت: dd-mm-yyyy وارد کنید.");
                        array_push($errors, "چک کنید اعداد روز، ماه و سال منطقی وارد شده باشند.");
                    }else{
                        $_SESSION['mother_decease_date'] = $mother_decease_date;
                    }
                    if(!empty($_POST['mother_place_of_decease'])){
                        $mother_place_of_decease = $data_clean_up->test_input($regular_expressions['place'], $_POST['mother_place_of_decease']);
                        if(!empty($mother_place_of_decease)){
                            $_SESSION['mother_place_of_decease'] = $mother_place_of_decease;
                        }else{
                            array_push($errors, "محل وفات را به لاتین (حروف انگلیسی) بنویسید");
                        }
                    }else{
                        array_push($errors, "محل وفات مادر را ذکر کنید.");
                    }
                }else{
                    array_push($errors, "تاریخ فوت مادر را وارد کنید.");
                }
            }    
        }else{
            array_push($errors, "حیات مادر درست وارد نشده است");
        }
    }
?>