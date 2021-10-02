<?php include './includes/header.php'?>

<main class='not-found'>
    <div class='not-found__center'>
        <h2>404: Stranica nije pronadjena</h2>
        <p>Stranica koju ste trazili <span><?php echo explode("mrbig", $_SERVER["REQUEST_URI"])[1]; ?></span> nije pronadjena.</p>
        <a href="/" data-link-alt="Pocetna"><span>Pocetna</span></a>
    </div>
</main>

<?php include './includes/footer.php'?>
