<!DOCTYPE html>
<html lang = "it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesone -->
    <script src="https://kit.fontawesome.com/d1478bb10b.js" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- vue js -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
<title></title>
</head>

<body>
<?php 
    include __DIR__ . '/server/data.php';
    include __DIR__ . '/util/functions.php';
?>
<header>
    <?php include_once __DIR__ .'/partial/header.php'; ?>
</header>

<main id="app">
    <section class="container-fluid">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4 m-5">
            <div class="col" v-for="album in albums">
                <div class="card h-100 p-2">
                <img
                    :src="album.poster"
                    class="card-img-top p-2"
                    :alt="album.title"
                />
                <div class="card-body">
                    <h5 class="card-title text-white">{{ album.title }}</h5>
                    <p class="card-text text-secondary">
                    {{ album.author }}
                    </p>
                    <p class="card-text text-secondary">
                    {{ album.year }}
                    </p>
                </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- axios cdn -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>

</html>