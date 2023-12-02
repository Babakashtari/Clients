    <p class="required right">نام فرزند مطابق پاسپورت:</p>
    <label for="child_first_name">
        <input type="text" name="child_first_name" id="child_first_name" placeholder="نام" value="<?php if(isset($_POST['child_first_name']) && !empty($_POST['child_first_name'])){
        echo $child_first_name = $data_clean_up->test_input($regular_expressions['first_name'], $_POST['child_first_name']);
        } ?>">
    </label>
    <label for="child_last_name">
        <input type="text" name="child_last_name" id="child_last_name" placeholder="نام خانوادگی" value="<?php if(isset($_POST['child_last_name']) && !empty($_POST['child_last_name'])){
        echo $child_last_name = $data_clean_up->test_input($regular_expressions['last_name'], $_POST['child_last_name']);
        } ?>">
    </label>
    <p class="right required">رابطه فرزند با شما:</p>
    <label for="relationship">
        <select name="relationship" id="relationship">
            <option value="">انتخاب کنید</option>
            <option value="Son">پسر</option>
            <option value="Daughter">دختر</option>
        </select>
    </label>
    <p class="right required">وضعیت تاهل:</p>
    <label for="marital_status">
        <select name="marital_status" id="marital_status">
            <option value="">انتخاب کنید</option>
            <option value="single">مجرد</option>
            <option value="married">متاهل</option>
        </select>
    </label>
    <p class="right required">تاریخ تولد به میلادی:</p>
    <label for="birthdate">
        <input type="text" name="birthdate" id="birthdate" placeholder="2001-12-29">
    </label>
    <p class="right required">خدا را شکر در قید حیات است؟</p>
    <label class="right block" for="still_alive">
        <input class="revealers" type="checkbox" name="still_alive" id="still_alive">بله
    </label>
    <div class="to_reveal display_none full_width">
        <p class="right required">آیا شما را همراهی می کند؟</p>
        <label for="companionship">
            <select name="companionship" id="companionship">
                <option value="">انتخاب کنید</option>
                <option value="YES">بله</option>
                <option value="NO">خیر</option>
            </select>
        </label>
        <p class="right required">آدرس محل سکونت:</p>
        <label for="address">
            <input type="text" name="address" id="address" placeholder="تهران، خیابان دماوند، خیابان یونسیان، خیابان امینی، پلاک 50، واحد 12">
        </label>
    </div>
