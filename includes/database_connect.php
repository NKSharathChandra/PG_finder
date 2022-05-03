
<?php
$conn = mysqli_connect("127.0.0.1:8111", "root", "", "PGLife");

if (mysqli_connect_errno()) {
    // Throw error message based on ajax or not
    echo "Failed to connect to MySQL! Please contact the admin.";
    return;
}

?>