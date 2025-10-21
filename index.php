<?php
// index.php - insert form to MySQL (uses prepared statements)

// Change these DB creds to match the DB you create on EC2
$servername = "localhost";
$username   = "vinayuser";
$password   = "Vinay@123";
$dbname     = "vinay";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Read POST safely (simple sanitization)
$post = $_POST['post'] ?? '';
$name = $_POST['name'] ?? '';
$guardian = $_POST['guardian'] ?? '';
$dob = $_POST['dob'] ?? null;
$community = $_POST['community'] ?? '';
$qualification = $_POST['qualification'] ?? '';
$aadhaar = $_POST['aadhaar'] ?? '';
$computer = $_POST['computer'] ?? '';
$experience = intval($_POST['experience'] ?? 0);
$mobile = $_POST['mobile'] ?? '';
$alternate = $_POST['alternate'] ?? '';
$bike = $_POST['bike'] ?? '';
$android = $_POST['android'] ?? '';
$address = $_POST['address'] ?? '';

// Prepared statement to avoid SQL injection
$stmt = $conn->prepare("INSERT INTO candidates (post, name, guardian, dob, community, qualification, aadhaar, computer, experience, mobile, alternate, bike, android, address) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

if ($stmt === false) {
    die("Prepare failed: " . $conn->error);
}

$stmt->bind_param("ssisssssisssss", $post, $name, $guardian, $dob, $community, $qualification, $aadhaar, $computer, $experience, $mobile, $alternate, $bike, $android, $address);

if ($stmt->execute()) {
    echo "Data submitted successfully!";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
