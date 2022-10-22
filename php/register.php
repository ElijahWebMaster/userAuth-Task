<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

registerUser($username, $email, $password);

}

function registerUser($username, $email, $password){
    //save data into the file
    $data = [$username, $email, $password];
    $file = fopen('./users.csv', 'w');
    fputcsv($file, $data, ",");
    fclose($file);
}

registerUser($username, $email, $password);

echo "User Successfully Registered";


