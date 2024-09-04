<!-- <?php
$servername = "localhost"; // Assuming your MySQL server is running on localhost
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$database = "foodcave"; // Your database name

// Create a connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


$sql = "CREATE DATABASE foodcave";
$result = mysqli_query($conn, $sql);

if($result)
{
    echo "The db was created successfully <br>";
}
else
{
    echo "The db was not created because of this error ----->". mysqli_error($conn) ;


} 