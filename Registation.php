<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "Rohan@123";
    $dbname = "Wozber"; // Your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve form data
    $firstName = $_POST["firstName"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    // Add additional fields as needed

    // SQL query to insert data into the Wozber_login table
    $sql = "INSERT INTO Wozber_login (Name, Email_Id, Password) VALUES ('$firstName', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
