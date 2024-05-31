<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
include('conn.php');

// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if the user ID is provided
    if (isset($_POST['id'])) {
        $userId = $_POST['id'];

        // Fetch the user's clicks remaining count and last paraphrase time from the database
        $getClicksQuery = "SELECT clicks_remaining, last_click_time FROM signup WHERE id = '$userId'";
        $resultClicks = $conn->query($getClicksQuery);

        if ($resultClicks !== false) {
            if ($resultClicks->num_rows > 0) {
                $userData = $resultClicks->fetch_assoc();
                $clicksRemaining = $userData['clicks_remaining'];
                $lastParaphraseTime = strtotime($userData['last_click_time']);
                $currentTime = time();

                // Check subscription status and last paraphrase time
                if ($_SESSION['subscription'] == 0 && $clicksRemaining == 0 && ($currentTime - $lastParaphraseTime) < 86400) {
                    echo json_encode(['success' => false, 'message' => 'Subscription limit reached.']);
                } else {
                    // Update clicks remaining count
                    $updateClicksQuery = "UPDATE signup SET clicks_remaining = clicks_remaining - 1 WHERE id = '$userId'";
                    $updateResult = $conn->query($updateClicksQuery);

                    if ($updateResult !== false) {
                        echo json_encode(['success' => true, 'message' => $clicksRemaining - 1]);
                    } else {
                        // Provide more details about the database query error
                        echo json_encode(['success' => false, 'message' => 'Error updating clicks count: ' . $conn->error]);
                    }
                }
            } else {
                echo json_encode(['success' => false, 'message' => 'User not found']);
            }
        } else {
            // Provide more details about the database query error
            echo json_encode(['success' => false, 'message' => 'Database query error: ' . $conn->error]);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'User ID not provided']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}

// Close the database connection
$conn->close();
?>
