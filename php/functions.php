<?php
function saveData($filePath, $dataArray)
{
    // check if the JSON file exists
    if (file_exists($filePath)) {
        $currentData = file_get_contents($filePath);
        $arrayData = json_decode($currentData, true);

        if ($arrayData === null) {
            // If json_decode fails, initialize as an empty array
            $arrayData = [];
        }

        array_push($arrayData, $dataArray);
    } else {
        // create a new array
        $arrayData = [$dataArray];
    }

    // convert into json
    $jsonData = json_encode($arrayData, JSON_PRETTY_PRINT);

    // write the json into the file
    if (file_put_contents($filePath, $jsonData)) {
        echo "<script>console.log(Data successfully saved to JSON file.)</script>";
    } else {
        echo "<script>console.log(Error saving data.)</script>";
    }
}

function getData()
{
    // Load the JSON file
    $json = file_get_contents("../json/feedbacks.json");

    // Check if the file was read successfully
    if ($json === false) {
        die("Error reading the JSON file");
    }

    // Decode the JSON file into an associative array
    $data = json_decode($json, true);

    // Check if the JSON was decoded successfully
    if ($data === null) {
        die("Error decoding the JSON file");
    }

    return $data;
}
?>
