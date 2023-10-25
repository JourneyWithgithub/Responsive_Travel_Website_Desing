<?php

$connection = mysqli_connect('localhost', 'root', '', 'mbstu');

if(isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leavings'];

    $request = "INSERT INTO TourismDB (name, email, phone, address, location, guests, arrivals, leavings) VALUES ('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving')";

    mysqli_query($connection, $request);

    header('location: book.php');
} else {
    echo 'Something went wrong, please try again';
}


?>