<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <!-- Adding Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Registration Results</h2>

        <?php
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

        // SQL query to retrieve registration data
        $sql = "SELECT * FROM Wozber_login";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Display the registration data in a table
            echo "<table class='table'>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                        </tr>
                    </thead>
                    <tbody>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["Name"] . "</td>
                        <td>" . $row["Email_Id"] . "</td>
                        <td>" . $row["Password"] . "</td>
                      </tr>";
            }

            echo "</tbody></table>";
        } else {
            echo "No registration data found.";
        }

        // Close the database connection
        $conn->close();
        ?>

        <!-- Adding Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </div>
</body>

</html>
