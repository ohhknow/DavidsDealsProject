<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title>Review | David's Deals</title>
	<link rel="shortcut icon" type="image/png" href="images/people-favicon.png">
    <link rel="stylesheet" href="css/universal.css" type="text/css">
    <link rel="stylesheet" href="css/review.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="src/normal.css" type="text/css">

	 <!-- Font for input boxes-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Foundation&display=swap" rel="stylesheet">

    <!-- Font for title-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Delicious+Handrawn&display=swap" rel="stylesheet">

    <!-- Font for schedule-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap" rel="stylesheet">
</head>
<body>
<header id="pageHeader">
      <h2 style="margin-top: -20px;">DAVID'S DEALS</h2>
      <div class="navbar">

        <a href="cart.html">
        <div class="cart">
            <i class="bi bi-cart2"></i>
            <div id="cartAmount" class="cartAmount">0</div>
        </div>
        </a>
    </div>
    </header>
    <nav id="mainNav">  
        <a href="home.html">Home</a>
        <br>
        <a href="index.html">Shop</a>
        <br>
        <a href="location.html">Location</a>
        <br>
        <a href="faq.html">FAQ</a>
        <br>
        <a href="contact.html">Contact</a>
        <br>
        <a href="review_page.php">Review</a>
    </nav>
	<article id="mainArticle">
		<?php include 'submit_review.php'; ?>
		<h1>Please Leave a Review</h1>
		<p>
			<b>Be Honest, We Can Take it!</b>
		</p>
		<form method="POST" action="submit_review.php">
			<input type="text" name="name" placeholder= "Name" id="review_name" required>
			<br>
			<label for="rating" class="rating-title"><b>Rating:</b></label>
			<select name="rating" id="rating" required>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>
			<br>
			<br>
			<textarea name="comment" id="reasons" placeholder="Give Us Your Feedback" required></textarea>
			<br>
			<input type="submit" name="submit" id= "submit" value="Submit Review">
		</form>

		<h2>Reviews</h2>
		<?php include 'display_review.php'; ?>
	</article>
    <div>
        <nav>
    </div>

    <div id="siteAds">
        <div class="border">
            Weekly Schedule 
            <br><br>
            Store prices go down each day! 
            <br><br>
            Friday $9 
            <br><hr> 
            Saturday $7  
            <br><hr>
            Sunday $5 
            <br><hr> 
            Monday $3 
            <br><hr> 
            Tuesday $1
          </div>
    </div>
    <div id="pageFooter">
        <br>
        <br>
        <br>
        Open Hours are 12pm-7pm: Monday, Tuesday, Friday, Saturday and Sunday<br>
        <hr>
        2515 E Clairemont Ave, 54701, Eau Claire, WI<br>
        <hr>
        ©2022 by David's Deals.
        <hr>
        (715)-864-7696
    </div>
</body>
<script src="src/Data.js"></script>
<script src="src/cart.js"></script>
</html>
