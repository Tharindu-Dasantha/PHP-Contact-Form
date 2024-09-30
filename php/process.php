<?php
require "functions.php";

if ($_SERVER["REQUEST_METHOD"] == $_POST) {
    // Collect the data
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $feedback_type = htmlspecialchars($_POST["feedback-type"]);
    $feedback = htmlspecialchars($_POST["feedback"]);

    echo "name: $name\nemail: $email\nfeedback_type: $feedback_type\nfeedback: $feedback";

    // saving the data in a json file
    $data = [
        "name" => $name,
        "email" => $email,
        "feedback-type" => $feedback_type,
        "feedback" => $feedback,
    ];

    // file path to json file
    $filePath = "../json/feedbacks.json";

    // saving the data
    saveData($filePath, $data);

    // Redirect to another page with the result (e.g., display.php)
    header("Location: feedbacks.php");
    exit();
}
?>
