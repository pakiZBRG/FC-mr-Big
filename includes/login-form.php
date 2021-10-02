<div class="center">
    <?php include 'functions/login.inc.php' ?>
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
    
    <button name='login' class='btn' onclick='logIn(); return false;'>Uloguj se</button>
</form