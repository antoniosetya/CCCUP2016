<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "buatdatabase";
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO bukutamu (id_tamu, nama, email, pesan)
VALUES ('', '$nama', '$email','$pesan')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<br><br><br>
<a href="index.php" style="padding : 15px;background-color : orange;">Kembali</a>