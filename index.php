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

<body >
    <div id="app">
        <header class="d-flex justify-content-between align-items-center">
            <?php include_once __DIR__ .'/partial/header.php'; ?>
        </header>
        <main  >
        <?php include_once __DIR__ .'/partial/main.php'; ?>
        </main>
    </div>
    
<!-- axios cdn -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>

</html>