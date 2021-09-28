<div class="center">
    <?php include 'send-mail.inc.php' ?>
</div>
<form method="POST">
    <div class='form_control'>
        <label>Email</label>
        <input
            type='email'
            id='email'
            value="<?php if(isset($_GET['email']) && !$status) echo $_GET['email']; ?>"
        />
    </div>
    <div class='form_control'>
        <label>Subjekt</label>
        <input
            type='text'
            id='subject'
            value="<?php if(isset($_GET['subject']) && !$status) echo $_GET['subject']; ?>"
        />
    </div>
    <div class='form_control'>
        <label>Poruka</label>
        <textarea id='message' rows='7'><?php if(isset($_GET['message']) && !$status) echo $_GET['message']; ?></textarea>
    </div>
    <!-- <input type='submit' name='send' value='Posaljite poruku' class='login_btn'/> -->
    <button name='send' id='send' class='login_btn' onclick='sendContact(); return false;'>Posaljite poruku</button>
</form>