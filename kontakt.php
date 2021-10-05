<?php include './includes/header.php' ?>
<?php include './includes/nav.php' ?>
<?php
    require realpath($_SERVER["DOCUMENT_ROOT"])."\\vendor\autoload.php";
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__)->load();
    $google = $_ENV["GOOGLE_API_KEY"];
?>

<main>
    <figure class='hero-img'>
        <img src="./assets/images/kontakt.jpg" alt='Mr Big kontakt'/>
        <h1>Kontakt</h1>
    </figure>

    <section class='contact'>
        <aside class='map' id='map'></aside>
        <article class='contact-form'>
            <h1>Posaljite nam poruku</h1>
            <div id="contact">
                <?php include './includes/contact-form.php' ?>
            </div>
        </article>
    </section>
</main>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=<?php echo $google ?>&callback=initMap"></script>
<script src='./js/map.js'></script>


<?php include './includes/footer.php'?>