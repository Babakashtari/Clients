<p class="required right">نام مادر خود را به انگلیسی دقیقا منطبق بر پاسپورت وارد کنید:</p>
<label for="firstname">
    <input type="text" name="mother_first_name" id="mother_firstname" placeholder="نام" value="<?php if(isset($_POST['mother_first_name']) && !empty($_POST['mother_first_name'])){
       echo $_POST['mother_first_name'];
    } ?>">
</label>
<label for="lastname">
    <input type="text" name="mother_last_name" id="mother_last_name" placeholder="نام خانوادگی" value="<?php if(isset($_POST['mother_last_name']) && !empty($_POST['mother_last_name'])){
       echo $_POST['mother_last_name'];
    } ?>">
</label>
<p class="required right">آیا ایشان در قید حیات هستند؟</p>
<label class="right block" for="mother_alive">
    <input type="radio" class="revealers" name="mother_alive" value="YES" <?php if(isset($_POST['mother_alive']) && $_POST['mother_alive'] == "YES"){echo "checked";} ?>>بله</input>
    <input type="radio" class="revealers" name="mother_alive" value="NO" <?php if(isset($_POST['mother_alive']) && $_POST['mother_alive'] == "NO"){echo "checked";} ?>>خیر</input>
</label>
<div style="width:100%" class="<?php if(!isset($_POST['mother_alive']) || $_POST['mother_alive'] == "YES"){echo "display_none";} ?> to_reveal">
    <p class="required right">تاریخ و محل فوت را به میلادی وارد کنید:</p>
    <input type="text" name="mother_decease_date" id="mother_decease_date" placeholder="2001-12-29" value="<?php if(isset($_POST['mother_decease_date']) && !empty($_POST['mother_decease_date'])){ echo $_POST['mother_decease_date'];} ?>">
    <input type="text" name="mother_place_of_decease" id="mother_place_of_decease" placeholder="Tehran" value="<?php if(isset($_POST['mother_place_of_decease']) && !empty($_POST['mother_place_of_decease'])){echo $_POST['mother_place_of_decease'];} ?>">
</div>
<button type="submit" name="mother_name" value="name">ارسال</button>
<script src="JS/show_additional_info.js"></script>