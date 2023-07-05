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
        <title>PHP Dischi JSON</title>
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
                </div>

            </div>
        </div>
        
        <script src="script.js"></script>
    </body>

</html>
