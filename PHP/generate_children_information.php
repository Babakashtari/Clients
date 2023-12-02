<div class="full_width">
    <p class="right">آیا صاحب فرزند می باشید؟</p>
    <label class="right block" for="have_children_yes">
        <input type="checkbox" class="revealers" name="have_children" id="have_children_yes" value="YES" <?php if(isset($_POST['have_children']) && $_POST['have_children'] == "YES"){echo "checked";} ?>>بله 
    </label>
</div>
<div class="to_reveal full_width display_none">
    <?php require "Children_information_inquiry.php"; ?>
</div>

<button type="submit" name="children_info" value="name">ارسال</button>
<script src="JS/Yes_revealer.js"></script>