<?php
$servername = "d22cs001_02";
$username = "root";
$password = "root";
$dbname = "mydatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data into the database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $sql = "INSERT INTO mytable (name) VALUES ('$name')";
    $conn->query($sql);
}

// Retrieve data from the database
$result = $conn->query("SELECT * FROM mytable");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Application</title>
</head>
<body>
    <h1>Hello Welcome!</h1>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="name">Enter Name:</label>
        <input type="text" id="name" name="name" required>
        <input type="submit" value="Submit">
    </form>

    <h2>Records in the database:</h2>
    <ul>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<li>" . $row['name'] . "</li>";
        }
        ?>
    </ul>

    <?php
    // Close the connection
    $conn->close();
    ?>
</body>
</html>
