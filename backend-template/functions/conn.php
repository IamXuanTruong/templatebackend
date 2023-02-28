<?php 

// Connection creation
$conn = new mysqli("127.0.0.1", "root", "", "backendtemplate");

// Error check
if ($conn -> connect_errno) {
    var_dump(mysqli_connect_error());
    exit();
}

// Function: Select *
function selectTable($table) {
    GLOBAL $conn;
    $sql = "SELECT * FROM $table";
    $query = mysqli_query($conn, $sql);

    return $query;
}


?>
