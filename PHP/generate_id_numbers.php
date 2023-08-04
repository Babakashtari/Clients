<p class="required right">شماره پاسپورتتان را وارد کنید:</p>
<label for="passport_number"><input type="text" name="passport_number" id="passport_number" placeholder="K12754869" value="<?php if(isset($_POST['passport_number']) && !empty($_POST['passport_number'])){
       echo $passport_number = $data_clean_up->test_input($regular_expressions['passport_number'], $_POST['passport_number']);
    } ?>"></label>
<p class="required right">کد ملی خود را وارد کنید:</p>
<label for="national_id_number"><input type="text" name="national_id_number" id="national_id_number" placeholder="0079505971" value="<?php if(isset($_POST['national_id_number']) && !empty($_POST['national_id_number'])){
       echo $national_id_number = $data_clean_up->test_input($regular_expressions['national_id_number'], $_POST['national_id_number']);
    } ?>"></label>
<p class="required right">شماره شناسنامه خود را وارد کنید:</p>
<label for="birth_certificate_number"><input type="text" name="birth_certificate_number" id="birth_certificate_number" placeholder="52426" value="<?php if(isset($_POST['birth_certificate_number']) && !empty($_POST['birth_certificate_number'])){
       echo $birth_certificate_number = $data_clean_up->test_input($regular_expressions['birth_certificate_number'], $_POST['birth_certificate_number']);
    } ?>"></label>
<input type="submit" name="id_numbers" value="ارسال">