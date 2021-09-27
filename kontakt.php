<?php include './includes/header.php'?>
<?php include './includes/nav.php'?>

<main>
    <figure class='hero-img'>
        <img src="./assets/images/kontakt.jpg" alt='Mr Big kontakt'/>
        <h1>Kontakt</h1>
    </figure>

    <section class='contact'>
        <aside class='map' id='map'></aside>
        <article class='contact-form'>
            <div class="center">
                <?php include './includes/functions/send-mail.inc.php' ?>
            </div>
            <form method="POST">
                <div class='form_control'>
                    <label>Email</label>
                    <input
                        type='email'
                        name='email'
                        value="<?php if(isset($_POST['email']) && !$status) echo $_POST['email']; ?>"
                    />
                </div>
                <div class='form_control'>
                    <label>Subjekt</label>
                    <input
                        type='text'
                        name='subject'
                        value="<?php if(isset($_POST['subject']) && !$status) echo $_POST['subject']; ?>"
                    />
                </div>
                <div class='form_control'>
                    <label>Poruka</label>
                    <textarea name='message' rows='7'><?php if(isset($_POST['message']) && !$status) echo $_POST['message']; ?></textarea>
                </div>
                <input type='submit' name='send' value='Posaljite poruku' class='login_btn'/>
            </form>
        </article>
    </section>
</main>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2bbVHiy49yERPNxWkbZjF1MjLLheKL64&callback=initMap"></script>
<script src='./js/map.js'></script>


<?php include './includes/footer.php'?>