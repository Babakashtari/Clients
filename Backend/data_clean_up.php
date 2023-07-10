<?php

class Data_clean_up {
  // cleaning user inputs:
  function test_input($regex, $data) {
    $data = trim($data);
    // echo "trimmed data is: " . $data . "<br>";

    $data = stripslashes($data);
    // echo "slash striped data is: " . $data. "<br>";

    $data = htmlspecialchars($data);
    // echo "htmlspecialchared data is: " . $data. "<br>";

    if (preg_match($regex,$data)) {
      return $data;
      echo $data;
    }else{
      return $data = null;
    }
  }

}
  
?>