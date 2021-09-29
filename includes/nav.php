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
                    echo '<li><a href="/mrbig/admin.php?page=clanovi" data-link-alt="Clanovi"><span>Clanovi</span></a></li>';
                } else {
                    echo '<li><a href="/mrbig/login" data-link-alt="Login"><span>Login</span></a></li>';
                }
            ?>
        </ul>
    </nav>
</header>

<header class='mobile'>
    <nav class='mobile_navigation'>
        <div class='mobile_navigation-menu' id='mobileNav'>
            <span class="line line1"></span>
            <span class="line line2"></span>
            <span class="line line3"></span>
        </div>
        <div class='mobile_navigation-content' id='mobileContent'>
            <div class='mobile_navigation-flex'>
                <h2 class='mobile_navigation-head'>Fc Mr Big</h2>
                <i class="fa fa-times-circle close" id='mobileClose'></i>
            </div>
            <div id="line" style='background: #444'></div>
            <ul class='mobile_navigation-links'>
                <a href='/mrbig'><li>Pocetna</li></a>
                <a href='/mrbig/kontakt'><li>Kontakt</li></a>
                <?php 
                    if(isset($_SESSION['email'])){
                        echo '<a href="/mrbig/admin.php?page=clanovi"><li>Clanovi</li></a>';
                    } else {
                        echo '<a href="/mrbig/login"><li>Login</li></a>';
                    }
                ?>
            </ul>
            <div id="line" style='background: #444'></div>
            <div class="mobile_navigation-contact">
                <span id='telephone'>014/238-123</span>
                <span id='mail'><a href="mailto:teretanamrbig@gmail.com">teretanamrbig@gmail.com</a></span>
            </div>
        </div>
    </nav>
</header>