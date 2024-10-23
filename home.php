<!doctype html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Gathering Feedback</title>
        <link rel="stylesheet" type="text/css" href="css/home.css">
    </head>
    <body>
        <h1>Gethering Feedback</h1>
        <form method="post" action="php/process.php">
            <label for="name">Enter your name: </label>
            <input required type="text" name="name" id="name" />
            <label for="email">Enter your email: </label>
            <input required type="email" name="email" id="email" />
            <label for="feedback-type">Select your feedback type: </label>
            <select id="feedback-type" name="feedback-type">
                <option value="Query">Query</option>
                <option value="Feedback">Feedback</option>
                <option value="Complaint">Complaint</option>
                <option value="Other">Other</option>
            </select>
            <label for="feedback">Enter your Feedback: </label>
            <textarea id="feedback" name="feedback"></textarea>
            <input type="submit" value="Submit" />
        </form>
    </body>
</html>
