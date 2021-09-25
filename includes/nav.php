<?php 
    $pageName = $_SERVER['PHP_SELF'];
    $name;

    if(str_contains($pageName, 'index')){
        $name = ' | Pocetna';
    } else if(str_contains($pageName, 'kontakt')) {
        $name = ' | Kontakt';
    } else if(str_contains($pageName, 'login')) {
        $name = ' | Login';
    } else {
        $name = '';
    }

?>

<header class='navigation'>
    <nav class='navigation_flex'>
        <div class="navigation_img">
            <img src='./assets/images/logo.png' alt='Mr Big'>
            <h2>Mr Big</h2>
        </div>
        <ul class='navigation_links'>
            <li><a href="/mrbig" data-link-alt="Pocetna"><span>Pocetna</span></a></li>
            <li><a href="/mrbig/kontakt" data-link-alt="Kontakt"><span>Kontakt</span></a></li>
            <?php 
                if(isset($_SESSION['email'])){
                    echo '<li><a href="/mrbig/admin.php?page=clanovi"" data-link-alt="Clanovi"><span>Clanovi</span></a></li>';
                } else {
                    echo '<li><a href="/mrbig/login" data-link-alt="Login"><span>Login</span></a></li>';
                }
            ?>
        </ul>
    </nav>
</header>