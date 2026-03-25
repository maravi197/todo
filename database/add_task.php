<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'db_connect.php';

// variables (ab ye string ki tarah save honge)
$name = "rahul_vermax"; 
$email = "rahulmaravi@example.com";
$pass = "password123";

// password ko secure karna
$hashed_password = password_hash($pass, PASSWORD_DEFAULT);

// dhyan se dekh: column name 'name' hai (na ki username)
// aur hum id or created_at Not bhej rahe kyunki wo auto-managed hain
$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashed_password')";

if (mysqli_query($conn, $sql)) {
    echo "<h3>Aaiitt user successfully created.</h3>";
} else {
    echo "error logic me hai: " . mysqli_error($conn);
}

mysqli_close($conn);
?>