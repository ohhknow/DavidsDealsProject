<head>
	<link rel="stylesheet" href="css/review.css">
</head>

<?php
// include the connection.php file
require_once('connection.php');

// select reviews from database
$select_query = "SELECT * FROM reviews ORDER BY id DESC";
$result = mysqli_query($db_connection, $select_query);

// display reviews
if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<div class='reviews'><p><strong>" . $row['name'] . ":</strong> " . $row['comment'] . "</p><p><strong>Rating:</strong> <span class='rating'>" . $row['rating'] . "/5</span></p></div>";
    }
} else {
    echo "<p>No reviews yet.</p>";
}

?>