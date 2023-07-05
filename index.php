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
    <!-- AXIOS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>
    <title>PHP Dischi JSON</title>
    <!-- Font Awesome 6.4.0 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css"
        integrity="sha512-h3sKk/x6ipBRuYXJ8V7Ku6S4T6T+fxHcIC8WSPcJvPzLPTyuFy/aXf8dn1xilJv2I2QnZGTLue5f0ZR5UE5i5Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
    <div id="app" class="container">
        <header>
            <div class="row">
                <div class="col-2">
                    <div class="logo">
                        <img src="./img/logo.png" alt="logo">
                    </div>
                </div>
            </div>
        </header>

        <main>
            <div class="row">
                <div class="col-12">
                    <div class="album-container">

                        <div class="album-row" v-for="(item, index) in items" :key="index">
                            <div class="album-container">
                                <div class="picture-container">
                                    <img :src="item.poster" :alt="item.title">
                                </div>
                                <div class="text-container">
                                    <h3 class="album-title">{{ item.title }}</h3>
                                    <p class="artist-title">{{ item.author }}</p>
                                    <h3 class="release-year">{{ item.year }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="./script/script.js"></script>
</body>

</html>