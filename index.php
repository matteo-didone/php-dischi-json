<?php

$albums = [
    [
        "title" => "New Jersey",
        "author" => "Bon Jovi",
        "year" => 1988,
        "poster" => "https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg",
        "genre" => "Rock"
    ],
    [
        "title" => "Live at Wembley 86",
        "author" => "Queen",
        "year" => 1992,
        "poster" => "https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg",
        "genre" => "Pop"
    ],
    [
        "title" => "Ten\"s Summoner\"s Tales",
        "author" => "Sting",
        "year" => 1993,
        "poster" => "https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg",
        "genre" => "Pop"
    ],
    [
        "title" => "Steve Gadd band",
        "author" => "Steve Gadd Band",
        "year" => 2018,
        "poster" => "https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg",
        "genre" => "Jazz"
    ],
    [
        "title" => "Brave new World",
        "author" => "Iron Maiden",
        "year" => 2000,
        "poster" => "https://upload.wikimedia.org/wikipedia/en/0/03/Iron_Maiden_-_Brave_New_World.jpg",
        "genre" => "Metal"
    ],
    [
        "title" => "One more car, one more rider",
        "author" => "Eric Clapton",
        "year" => 2002,
        "poster" => "https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg",
        "genre" => "Rock"
    ]
];

/*
We have to do two things:
1) Prepare the receiver to accept a JSON file
2) Prepare the data as a JSON object
*/

// I'm using this to send the array to the client side
header('Content-Type: application/json');
// Printing the array as a JSON object
echo json_encode($albums);

?>

<!-- 
Description
We need to create a web app that allows reading a list of albums from our server.

Stack
Html, CSS, VueJS (imported via CDN), axios, PHP

Tips
In carrying out the exercise, follow a gradual approach.
First, ensure that your index.php page (your front-end) can communicate correctly with your PHP script (your "API").

Only then it will be useful to proceed to read the list from a JSON file.


Bonus
On clicking an album, retrieve and display the data of the selected album.
-->
<!DOCTYPE html>

<html lang="it">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- VUE -->
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <title>Vue Hello</title>
        <!-- Font Awesome 6.4.0 -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css" integrity="sha512-h3sKk/x6ipBRuYXJ8V7Ku6S4T6T+fxHcIC8WSPcJvPzLPTyuFy/aXf8dn1xilJv2I2QnZGTLue5f0ZR5UE5i5Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="style.css">
    </head>

    <body>

        <div class="container">
            
            <div class="square">

                <!-- Vue Code Here -->
                <div id="app">
                    <h1>{{ message }}</h1>
                </div>

            </div>
        </div>
        
        <script src="script.js"></script>
    </body>

</html>
