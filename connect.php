<?php
echo "This is database connection lets try it <br>";
$con = mysqli_connect("localhost","root","","chech");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL:<br> " . mysqli_connect_error();
    exit();}
else
{
    echo "connected<br>";
}



?>

<?php
    $db_host = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_database = "chech";
    $connection = mysqli_connect($db_host,$db_username,$db_password,$db_database);
   
    if($connection)
    {
        echo "<h2>Connected to Database successfully.</h2>";
    }
    else
    {
        echo "Not connected";
    }
?>