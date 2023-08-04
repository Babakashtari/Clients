<?php 
$regular_expressions=[
    "destination_country" => '/^(CANADA|USA|AUSTRALIA)$/',
    "first_name" => '/[A-Za-z]+/',
    "last_name" => '/[A-Za-z]+/',
    "immigration_type" => '/^(permanent_residence)|(temporary_stay)$/',
    "national_id_number" => '/^\d+$/',
    "passport_number" => '/^[\da-zA-Z]+$/',
    "birth_certificate_number" => '/^\d+$/',
    "alive" => '/^(YES|NO)$/',
    "date" => '/^(1[8-9][0-9]{2}|20[0-9]{2})\-(0?[1-9]|1[0-2])\-(0?[1-9]|[1-2][0-9]|3[0-1])$/',
    "place" => '/^[a-zA-Z]+$/'
];
?>
