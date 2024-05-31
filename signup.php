<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp TextTweaker</title>
    <link rel="stylesheet" href="CSS/signUp.css">
</head>

<body>

    <div class="SignUp_Form">
        <img src="img/user_icon.png" alt="user_icon">
        <h1>SignUp Now</h1>
        <p>Please fill in this form to create an account.</p>
        <form action="" class="sig" method="post">
            <ul>
                <li><label for="Name"><b>Name</b></label>
                    <input type="text" class="inputBox" placeholder="Enter Name" name="name" required>
                </li>
                <li><label for="phNumber"><b>Phone</b></label>
                    <input type="number"  class="inputBox" placeholder="Enter Number" name="Number" required>
                </li>
                <li><label for="email"><b>Email</b></label>
                    <input type="text"  class="inputBox" placeholder="Enter Email" name="email" required>
                </li>
                <li>
                    <label for="password"><b>Password</b></label>
                    <input type="password" class="inputBox" placeholder="Enter Password" name="password" required>
                </li>
            </ul>
            <p><span><label>
                        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px">
                    </label></span>I agree the <a href="#">Terms & Conditions</a></p>
            <button type="submit"  class="signup_button">SignUp</button>
            <hr>
            <p class="or">OR</p>
            <p>Do you have an account? <a href="login.php" class="id_signin_a">Sign in</a></p>
        </form>
    </div>

</body>

</html>
<?php
session_start(); 
include('conn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST['name'];
    $phone = $_POST['Number'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the email is already in use
    $check_email_query = "SELECT * FROM signup WHERE Email = '$email'";
    $result_email = $conn->query($check_email_query);

    if ($result_email->num_rows > 0) {
        echo '<script>alert("This email is already in use. Please choose a different one!");</script>';
        $conn->close();
        exit();
    }

    // Check if the phone number is already in use
    $check_phone_query = "SELECT * FROM signup WHERE Phone = '$phone'";
    $result_phone = $conn->query($check_phone_query);

    if ($result_phone->num_rows > 0) {
        echo '<script>alert("This phone number is already in use. Please choose a different one!");</script>';
        $conn->close();
        exit();
    }

    // Convert the CheckButton value to 1 (true) or 0 (false)
    $checkButton = isset($_POST['remember']) ? 1 : 0;

    $insert_query = "INSERT INTO signup (Name, Phone, Email, Password, CheckButton) 
                    VALUES ('$name', '$phone', '$email', '$password', '$checkButton')";

    if ($conn->query($insert_query) === TRUE) {
        echo '<script>alert("Signup successful!");</script>';

        // Set the session email after successful signup
        $_SESSION['email'] = $email;

        // Redirect to the BuyPlan page after successful signup
        header('Location: BuyPlan.php');
        exit();
    } else {
        echo "Error: " . $insert_query . "<br>" . $conn->error;
    }
}

$conn->close();
?>
