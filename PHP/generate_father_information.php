<p class="required right">نام پدر خود را به انگلیسی دقیقا منطبق بر پاسپورت وارد کنید:</p>
<label for="firstname">
    <input type="text" name="first_name" id="firstname" placeholder="نام" value="<?php if(isset($_POST['father_name']) && !empty($_POST['first_name'])){
       echo $first_name = $data_clean_up->test_input($regular_expressions['first_name'], $_POST['first_name']);
    } ?>">
</label>
<label for="lastname">
    <input type="text" name="last_name" id="lastname" placeholder="نام خانوادگی" value="<?php if(isset($_POST['father_name']) && !empty($_POST['last_name'])){
       echo $last_name = $data_clean_up->test_input($regular_expressions['last_name'], $_POST['last_name']);
    } ?>">
</label>
<p class="required right">آیا ایشان در قید حیات هستند؟</p>
<label class="right block" for="father_alive_yes">
    <input type="radio" class="revealers" name="father_alive" id="father_alive_yes" value="YES" <?php if(isset($_POST['father_alive']) && $_POST['father_alive'] == "YES"){echo "checked";} ?>>بله</input>
</label>
<label class="right block" for="father_alive_no">
    <input type="radio" class="revealers" name="father_alive" id="father_alive_no" value="NO" <?php if(isset($_POST['father_alive']) && $_POST['father_alive'] == "NO"){echo "checked";} ?>>خیر</input>
</label>
<div style="width:100%" class="<?php if(!isset($_POST['father_alive']) || $_POST['father_alive'] == "YES"){echo "display_none";} ?> to_reveal">
    <p class="required right">تاریخ و محل فوت را به میلادی وارد کنید:</p>
    <input type="text" name="father_decease_date" id="father_decease_date" placeholder="2001-12-29" value="<?php if(isset($_POST['father_decease_date']) && !empty($_POST['father_decease_date'])){ echo $_POST['father_decease_date'];} ?>">
    <input type="text" name="father_place_of_decease" id="father_place_of_decease" placeholder="Tehran" value="<?php if(isset($_POST['father_place_of_decease']) && !empty($_POST['father_place_of_decease'])){echo $_POST['father_place_of_decease'];} ?>">
</div>
<button type="submit" name="father_name" value="name">ارسال</button>
<script src="JS/NO_revealer.js"></script>