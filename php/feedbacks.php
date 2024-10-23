<?php
require "functions.php";

$data = getData();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Feedback</title>
    <link rel="stylesheet" type="text/css" href="../css/feedbacks.css">
</head>
<body>
<div>
    <h1 class="heading">Feedbacks form customers</h1>
    <div class="container">
        <?php foreach ($data as $item):

            $name = htmlspecialchars($item["name"]);
            $email = htmlspecialchars($item["email"]);
            $feedbackType = htmlspecialchars($item["feedback-type"]);
            $feedback = htmlspecialchars($item["feedback"]);
            ?>

            <div class="card">
                <p class="feedback-type"><?php echo $feedbackType; ?></p>
                <p class="feedback">"<?php echo $feedback; ?>"</p>
                <div class="details">
                    <p class="name"><?php echo $name; ?></p>
                    <p class="email"><?php echo $email; ?></p>
                </div>
            </div>

        <?php
        endforeach; ?>


    </div>
</div>
</body>
</html>
