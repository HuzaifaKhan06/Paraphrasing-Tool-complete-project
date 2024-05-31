<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing Plans</title>
<link rel="stylesheet" href="CSS/buyPlan.css">
</head>
<body>

    <div class="pricing-card-container">
        <div class="pricing-card" id="freeCard">
            <img src="img/logo.png" alt="Free Image">
            <h2>Free Plan</h2>
            <p><span class="checkTick">&#10004;</span>Basic features for free</p>
            <p><span class="checkTick">&#10004;</span>You can only use 3 times a day</p>
            <p><span class="checkTick">&#10004;</span>In the free plan, </p>
            <p>there may be some errors</p>
            <button onclick="selectPlan('free')">Get Free</button>
        </div>
    
        <div class="pricing-card" id="premiumCard">
            <img src="img/logo.png" alt="Premium Image">
            <h2>Premium Plan</h2>
            <p><span class="checkTick">&#10004;</span>Unlock advanced features</p>
            <p><span class="checkTick">&#10004;</span>No time limit</p>
            <p><span class="checkTick">&#10004;</span>Correct and accurate data</p>
            <p>Only <span class="cross">&#10007;</span> <del>$30</del> <span class="checkTick">&#10004;</span>$19 per month</p>
            <button onclick="selectPlan('premium')">Buy Premium</button>
        </div>
    </div>

<form id="pricingForm" action="" method="post">
    <input type="hidden" id="selectedPlan" name="selectedPlan" value="">
</form>

<script>
    function selectPlan(plan) {
        document.getElementById('selectedPlan').value = plan;
        document.getElementById('pricingForm').submit();
    }
</script>

</body>
</html>

<?php
session_start(); // Start the session
include('conn.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the form is submitted
    if (isset($_POST['selectedPlan'])) {
        // Get the selected plan value
        $selectedPlan = ($_POST['selectedPlan'] == 'free') ? 0 : 1;  

        // Update the subscription and clicks_remaining columns in the signup table based on the user's email
        if (isset($_SESSION['email'])) {
            $email = $_SESSION['email'];

            // Determine the clicks_remaining value based on the selected plan
            $clicksRemaining = ($selectedPlan == 0) ? 4 : 9999;

            $updateQuery = "UPDATE signup SET subscription = '$selectedPlan', clicks_remaining = '$clicksRemaining' WHERE Email = '$email'";
            $updateResult = mysqli_query($conn, $updateQuery);

            if (!$updateResult) {
                echo "Error updating subscription and clicks_remaining in the database: " . mysqli_error($conn);
            }
        } else {
            echo "Error: User email not found in session.";
        }

        // Insert the selected plan into the user_plans table
        $insertQuery = "INSERT INTO user_plans (plan_selection) VALUES ('$selectedPlan')";
        $insertResult = mysqli_query($conn, $insertQuery);

        if ($insertResult) {
            // Use JavaScript to display an alert on successful data storage
            echo '<script>alert("Plan selected successfully.");</script>';
        } else {
            echo "Error storing plan in the database: " . mysqli_error($conn);
        }
    }
}
?>

