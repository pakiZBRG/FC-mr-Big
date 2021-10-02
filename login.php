<?php include './includes/header.php'?>
<?php include './includes/nav.php'?>
<?php
    if(isset($_SESSION["email"])) {
        header("Location: /");
    }
?>

<main>
    <figure class='hero-img' style='margin-bottom: 3rem;'>
        <img src="./assets/images/login.jpg" alt='Mr Big login'/>
        <h1>Login</h1>
    </figure>

    <article id="login">
        <?php include './includes/login-form.php' ?>
    </article>
</main>

<?php include './includes/footer.php'?>