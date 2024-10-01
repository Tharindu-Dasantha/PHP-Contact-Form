<?php
require "functions.php";

$data = getData();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta viewport="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Feedback</title>
    </head>
    <body>
        <div>
            <h1>Feedbacks form customers</h1>
            <div>
                <?php foreach ($data as $item):

                    $name = htmlspecialchars($item["name"]);
                    $email = htmlspecialchars($item["email"]);
                    $feedbackType = htmlspecialchars($item["feedback-type"]);
                    $feedback = htmlspecialchars($item["feedback"]);
                    ?>

                    <!-- container for all the cards -->
                    <div>
                    <!-- card -->
                        <div>
                            <h3>
                                <?php echo "$feedbackType"; ?>
                            </h3>
                            <p>
                                <?php echo "$feedback"; ?>
                            </p>
                            <!-- name and email -->
                            <div>
                                <p><?php echo "$name"; ?></p>
                                <p><?php echo "$email"; ?></p>
                            </div>
                        </div>
                    </div>

                <?php
                endforeach; ?>

            </div>
        </div>
    </body>
</html>
