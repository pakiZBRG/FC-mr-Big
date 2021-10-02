<?php 

    ob_start();
    session_start();
    include 'functions/db.inc.php';

    $pageName = $_SERVER['PHP_SELF'];
    $name;

    if(str_contains($pageName, 'index')){
        $name = ' | Pocetna';
    } else if(str_contains($pageName, 'kontakt')) {
        $name = ' | Kontakt';
    } else if(str_contains($pageName, 'login')) {
        $name = ' | Login';
    } else if(str_contains($pageName, 'admin')) {
        $name = ' | Admin';
    } else {
        $name = '';
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="/assets/images/logo.png" type="image/x-icon">
        <title>Fc Mr Big<?php echo $name; ?></title>
        <link rel="stylesheet" href="/style/style.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.2/gsap.min.js"></script>
        <script src="https://kit.fontawesome.com/877dc3bb9e.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollTrigger.min.js"></script>
        <script src="/js/ajax.js"></script>
        <script src="/js/mobileNav.js"></script>
        <script>
            // Prevent resending forms on page refresh
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }
        </script>
    </head>
    
    <body>