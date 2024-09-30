

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=devie-width, initial-scale=1.0" />
        <title>Gether Feedback</title>
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
                <option vlaue="Query">Query</option>
                <option vlaue="Feedback">Feedback</option>
                <option vlaue="Complaint">Complaint</option>
                <option vlaue="Other">Other</option>
            </select>
            <label for="feedback">Enter your Feedback: </label>
            <textarea id="feedback" name="feedback"></textarea>
            <input type="submit" vlaue="Submit" />
        </form>
    </body>
</html>
