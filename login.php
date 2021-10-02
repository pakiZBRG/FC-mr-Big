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

    <div class="center">
        <?php include './includes/functions/login.inc.php' ?>
    </div>

    <form method="POST" class="login-form">
        <div class='form_control'>
            <label>Email</label>
            <input
                type='email'
                id='email'
                value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>"
            />
        </div>
        <div class='form_control'>
            <label>Lozinka</label>
            <input
                type='password'
                id='password' 
                value="<?php if(isset($_POST['password'])) echo $_POST['password']; ?>"
            />
        </div>
        
        <button name='login' class='btn' onclick='login(); return false;'>Uloguj se</button>
    </form>
</main>

<?php include './includes/footer.php'?>