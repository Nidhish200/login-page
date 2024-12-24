<?php
// Include database connection
include 'db.php';
if(isset($_POST['btn']))
{
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['firstname'], $_POST['lastname'], $_POST['regemail'], $_POST['regpassword'])) {
        // Sanitize inputs
        $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
        $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
        $regemail = mysqli_real_escape_string($conn, $_POST['regemail']);
        $regpassword = $_POST['regpassword'];

        // Hash the password before saving
        $hashedPassword = password_hash($regpassword, PASSWORD_DEFAULT);

        // Insert the data into the database
        $sql = "INSERT INTO user (firstname, lastname, regemail, regpassword) VALUES ('$firstname', '$lastname', '$regemail', '$hashedPassword')";

        if ($conn->query($sql) === true) {
            echo "User registered successfully";
        } else {
            echo "Error: " . $sql ." ". $conn->error;
        }
    }
}
}
$conn->close();
?>