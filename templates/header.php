<?php 
require_once ('lib/config.php');
require_once('lib/pdo.php');

$currentPage = basename($_SERVER["SCRIPT_NAME"]);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/override-bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container col-xxl-8 px-4 py-5">
     <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
         <div class="col-md-3 mb-2 mb-md-0">
             <a href="index.php" class="d-inline-flex link-body-emphasis text-decoration-none">
                <img src="assets/images/logo-cuisinea-horizontal.jpg" alt="logo" width="250">
             </a>
         </div>

         <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 nav nav-pills">
            <?php foreach ($maineMenu as $key => $value) { ?>
                <li class="nav-item"><a href="<?=$key; ?>" class="nav-link <?php  if ($currentPage === $key) { echo 'active'; } ?>"><?=$value ;?></a></li>
             <?php } ?>    
             
         </ul>

         <div class="col-md-3 text-end">
             <button type="button" class="btn btn-outline-primary me-2">Login</button>
             <button type="button" class="btn btn-primary">Sign-up</button>
         </div>
      </header>