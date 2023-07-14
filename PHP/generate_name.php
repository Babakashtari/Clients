<p class="required">نام خود را به انگلیسی دقیقا منطبق بر پاسپورتتان وارد کنید:</p>
<label for="firstname">
    <input type="text" name="first_name" id="firstname" placeholder="نام" value="<?php if(isset($_POST['name']) && !empty($_POST['first_name'])){
       echo $first_name = $data_clean_up->test_input($regular_expressions['first_name'], $_POST['first_name']);
    } ?>">
</label>
<label for="lastname">
    <input type="text" name="last_name" id="lastname" placeholder="نام خانوادگی" value="<?php if(isset($_POST['name']) && !empty($_POST['last_name'])){
       echo $last_name = $data_clean_up->test_input($regular_expressions['last_name'], $_POST['last_name']);
    } ?>">
</label>
<button type="submit" name="name" value="name">ارسال</button>