<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="author" content="Huriel Lopes" />
    <meta name="description" content="Site de divulgação de serviços!" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Error 404</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.css" />
    <link rel="stylesheet" href="/assets/css/style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" />
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" /> -->
    <link rel="stylesheet" href="/assets/css/opensans.css" />
</head>
<body>
    <div class="container">
        <?php
            require_once __DIR__ . "/../principal/includes/menu.php";
        ?>
    
        <div class="row text-center mt-5">
            <div class="col">
                <h3 class="text-danger">Error 404!</h3>
                <p class="text-danger">Not Page Found!</p>
            </div>
        </div>
        
        <?php
            require_once __DIR__ . "/../principal/includes/footer.php";
        ?>
    </div>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
</body>
</html>
