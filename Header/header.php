<div class="developmental">
<?php
if(isset($_POST)){
    echo "POST array:";
    print_r($_POST);
    ?>
    <br>
    <?php
}
if(isset($_GET)){
    echo "Get array:";
    print_r($_GET);
    ?>
    <br>
    <?php
}
if(isset($_SESSION)){
    echo "Session array:";
    print_r($_SESSION);
    ?>
    <br>
    <?php
}
?>
</div>

<header>
    <?php 
        // هنگام ورود به سایت
        if(!isset($_SESSION['initiate'])){
            ?>
            <div>
                <p>سلام. خوش آمدید. در زیر چند سوال از شما پرسیده می شود که با پاسخ به آنها ما را در سابمیت پرونده خود یاری خواهید کرد. امیدواریم بتوانیم در این مسیر شما را یاری کنیم. </p>
                <p>برای ادامه روی دکمه زیر کلیک کنید:</p>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                    <input type="submit" name="start" value="شروع">
                </form>
            </div>
            <?php
        }else{
            if(!isset($_POST['start'])){
                ?>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                    <input type="submit" name="<?php echo array_key_last($_POST); ?>" value="بازگشت به مرحله قبل">
                </form>
                <?php
            }
            ?>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                    <input type="submit" name="kill" value="از اول شروع کن">
                </form>
            <?php 
        }
    ?>
</header>
<?php
?>