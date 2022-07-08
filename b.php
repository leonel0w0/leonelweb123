<?php
$servername = "fdb33.awardspace.net";   //$servername = "fdb26.awardspace.net"; 
$username = "4033163_shiva179";           //$username = "3314504_shiva";
$password = "freefire123";                 //$password = "Shivam@179";
$dbname = "4033163_shiva179";           //$dbname = "3314504_shiva";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO users (sex,username, password,gmail) VALUES ('



".$_POST["sex"]."
', '




".$_POST["username"]."
', '


".$_POST["password"]."
', '


".$_POST["gmail"]."
')";










if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
