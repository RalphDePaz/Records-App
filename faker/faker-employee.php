<?php
require('vendor/autoload.php');
require_once('config\config.php');
require_once('config\db.php');

$faker = Faker\Factory::create('en_PH');
for ($start = 1; $start <= 200; $start++) {

    $lastname = mysqli_real_escape_string($conn, $faker->lastName);
    $firstname = mysqli_real_escape_string($conn, $faker->firstName);
    $office = mysqli_real_escape_string($conn, $faker->numberbetween($min = 1, $max = 10));
    $address = mysqli_real_escape_string($conn, $faker->streetAddress);
    
    $fakesql = "INSERT INTO employee(lastname, firstname, office_id, address) VALUES ('$lastname','$firstname', '$office', '$address')";
    mysqli_query($conn, $fakesql);


}
?>