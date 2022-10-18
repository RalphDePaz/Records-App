<?php
require('vendor/autoload.php');
require_once('config\config.php');
require_once('config\db.php');

$faker = Faker\Factory::create('en_PH');
for ($start = 1; $start <= 200; $start++) {

    $compname = mysqli_real_escape_string($conn, $faker->company);
    $contactnum = mysqli_real_escape_string($conn, $faker->phoneNumber);
    $email = mysqli_real_escape_string($conn, $faker->email);
    $address = mysqli_real_escape_string($conn, $faker->streetAddress);
    $city = mysqli_real_escape_string($conn, $faker->city);
    $country = mysqli_real_escape_string($conn, $faker->country);
    $postal = mysqli_real_escape_string($conn, $faker->postcode);
    
    $fakesql = "INSERT INTO office(name, contactnum, email, address, city, country, postal) VALUES ('$compname','$contactnum', '$email', '$address', '$city', '$country', '$postal')";
    mysqli_query($conn, $fakesql);


}
?>