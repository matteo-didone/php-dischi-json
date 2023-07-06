<?php 
    // Expose an API endpoint that returns a JSON file with the list of albums.
    $stringRawData = file_get_contents('./database/data.json');

    // Now, we need to turn the raw data that's in JSON to a format that PHP can understand, that we can work with
    // We can do that with a function called json_decode, which is the opposite of json_encode
    // REMEMBER:
    // FROM JSON TO PHP --> json_decode
    // FROM PHP TO JSON --> json_encode
    $discs = json_decode($stringRawData, true);

    header('Content-Type: application/json');
    echo $stringRawData;
?>