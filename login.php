<?php
session_start();
include('conn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    if (!empty($email) && !empty($password)) {
        // Check if the email and password match in the signup table
        $check_credentials_query = "SELECT * FROM signup WHERE email = '$email' AND password = '$password'";
        $result_credentials = $conn->query($check_credentials_query);

        if ($result_credentials !== false && $result_credentials->num_rows > 0) {
            $user = $result_credentials->fetch_assoc();

            // Set last_paraphrase_time to the current timestamp
            $updateLastParaphraseTime = "UPDATE signup SET last_click_time = NOW() WHERE id = {$user['id']}";
            $conn->query($updateLastParaphraseTime);

            $_SESSION['id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['subscription'] = $user['subscription'];
            $_SESSION['clicks_remaining'] = $user['clicks_remaining'];

            // ... (rest of your existing code)

            // Check if the user has exceeded their daily clicks limit
            $today = date('Y-m-d');
            $check_daily_clicks_query = "SELECT COUNT(*) AS daily_clicks FROM paraphrase_history WHERE user_id = {$_SESSION['id']} AND date = '$today'";
            $result_daily_clicks = $conn->query($check_daily_clicks_query);

            if ($result_daily_clicks !== false && $result_daily_clicks->num_rows > 0) {
                $daily_clicks = $result_daily_clicks->fetch_assoc()['daily_clicks'];

                if ($daily_clicks >= 3 && $_SESSION['subscription'] == 0) {
                    $_SESSION['clicks_remaining'] = 0;
                    echo "Before redirect";
                    exit();
                }
            }

            // Redirect to Paraphrasing.php if login is successful
            header('Location: Paraphrasing.php');
            exit();
        } else {
            // Invalid credentials, you might want to handle this case
            echo '<script>alert("Invalid credentials. Please try again.");</script>';
        }
    } else {
        // Handle empty email or password
        echo '<script>alert("Please enter both email and password.");</script>';
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login TextTweaker</title>
    <link rel="stylesheet" href="CSS/login.css">
</head>

<body>
    <div class="SignUp_Form">
        <img src="img/user_icon.png" alt="user_icon">
        <h1>Login </h1>
        <p>Please fill in this form to login</p>
        <form action="" class="sig" method="post">
            <ul>
                <li><label for="email"><b>Email</b></label>
                    <input type="text" class="inputBox" placeholder="Enter Email" name="email" required>
                </li>
                <li>
                    <label for="password"><b>Password</b></label>
                    <input type="password" class="inputBox" placeholder="Enter Password" name="password" required>
                </li>
            </ul>
            <p><span><label>
                        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px">
                    </label></span>Remember me</p>
            <button type="submit" class="login_button">Login</button>
            <hr>
            <p class="or">OR</p>
            <p>Don't have an account? <a href="signUp.php" class="id_signin_a">Sign Up</a></p>
        </form>
    </div>
</body>

</html>
