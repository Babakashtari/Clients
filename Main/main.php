<?php 
if(isset($_SESSION['initiate']) && $_SESSION['initiate'] == true){
    $data_clean_up = new Data_clean_up();

    ?>
    <div>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <?php 
                if(isset($_POST['start'])){
                    require "PHP/generate_destination.php";
                }
                elseif(isset($_POST['destination'])){
                    require "Backend/get_destination.php";
                    if(!empty($user_returned)){
                        require "PHP/generate_destination.php";
                    }elseif(empty($errors)){
                        require "PHP/generate_name.php";
                    }else{
                        foreach ($errors as $value){
                            ?>
                            <p class="error"><?php echo $value; ?></p>
                            <?php
                        }
                        require "PHP/generate_destination.php";
                    }
                }elseif(isset($_POST['name'])){
                    require "Backend/get_name.php";
                    if(!empty($user_returned)){
                        require "PHP/generate_name.php";
                    }elseif(empty($errors)){
                        require "PHP/generate_id_numbers.php";
                    }else{
                        foreach ($errors as $value) {
                            ?>
                            <p class="error"><?php echo $value; ?></p>
                            <?php
                        }
                        require "PHP/generate_name.php";
                    }
                }elseif(isset($_POST['id_numbers'])){
                    require "Backend/get_id_numbers.php";
                    if(!empty($user_returned)){
                        require "PHP/generate_id_numbers.php";
                    }elseif(empty($errors)){
                        require "PHP/generate_father_information.php";
                    }else{
                        foreach ($errors as $value) {
                            ?>
                            <p class="error"><?php echo $value; ?></p>
                            <?php
                        }
                        require "PHP/generate_id_numbers.php";
                    }
                }elseif(isset($_POST['father_name'])){
                    require "Backend/get_father_name.php";
                    if(!empty($user_returned)){
                        require "PHP/generate_father_information.php";
                    }elseif(empty($errors)){
                        require "PHP/generate_mother_information.php";
                    }else{
                        foreach ($errors as $value) {
                            ?>
                            <p class="error"><?php echo $value; ?></p>
                            <?php
                        }
                        require "PHP/generate_father_information.php";
                    }
                }elseif(isset($_POST['mother_name'])){
                    require "Backend/get_mother_name.php";
                    if(!empty($user_returned)){
                        require "PHP/generate_mother_information.php";
                    }elseif(empty($errors)){
                        require "PHP/generate_immigration_type.php";
                    }else{
                        foreach ($errors as $value) {
                            ?>
                            <p class="error"><?php echo $value; ?></p>
                            <?php
                        }
                        require "PHP/generate_mother_information.php";
                    }

                }elseif(isset($_POST['immigration_type'])){
                    require "Backend/get_immigration_type.php";
                    if(!empty($user_returned)){
                        require "PHP/generate_immigration_type.php";
                    }elseif(!empty($errors)){
                        foreach ($errors as $value) {
                            ?>
                            <p class="error"><?php echo $value; ?></p>
                            <?php
                        }
                        require "PHP/generate_immigration_type.php";
                    }
                }
            ?>
        </form>
    </div>
    <?php
}
?>