<?php
function saveData($filePath, $dataArray)
{
    // check if the JSON file exists
    if (file_exists($filePath)) {
        $currentData = file_get_contents($filePath);
        $arrayData = json_decode($currentData, true);
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
?>
