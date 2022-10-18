<?php
require('vendor/autoload.php');
require_once('config\config.php');
require_once('config\db.php');

$faker = Faker\Factory::create('en_PH');
for ($start = 1; $start <= 200; $start++) {

    $actions = array('IN', 'OUT', 'COMPLETE');
    $remarks = array('Signed', 'For approval', 'Pending','');

        $idemployee = mysqli_real_escape_string($conn, $faker->numberBetween($min = 1, $max = 10));
        $idoffice = mysqli_real_escape_string($conn, $faker->numberBetween($min = 1, $max = 10));
        $datelog = mysqli_real_escape_string($conn, $faker->date("Y-m-d H:i:s"));
        $action = mysqli_real_escape_string($conn, $actions[rand(0, 2)]);
        $remark = mysqli_real_escape_string($conn, $remarks[rand(0, 3)]);
        $documentcode = mysqli_real_escape_string($conn, $faker->numberBetween($min = 100, $max = 110));

    
    $fakesql = "INSERT INTO transaction(employee_id, office_id, datelog, action, remarks, documentcode) VALUES ('$idemployee','$idoffice', '$datelog', '$action', '$remark', '$documentcode')";
    mysqli_query($conn, $fakesql);


}
?>