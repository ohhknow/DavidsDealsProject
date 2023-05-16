<?php
// Include database connection constants
include('connection.php');

// Connect to the database
$db_connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Get form data
    $name = $_POST['name'];
    $rating = $_POST['rating'];
    $comment = $_POST['comment'];

    // Insert data into the database
    $insert_query = "INSERT INTO reviews (name, rating, comment) VALUES ('$name', '$rating', '$comment')";
    mysqli_query($db_connection, $insert_query);

    // Redirect back to the review page
    header("Location: review_page.php");
    exit();
}
?>


