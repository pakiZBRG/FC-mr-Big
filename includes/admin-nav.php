<nav class='admin-nav'>
    <div class="admin-nav__width">
        <ul>
            <li id='main'>DashBoard</li>
            <a href="admin.php?page=clanovi">
                <li <?php if(str_contains($_SERVER["REQUEST_URI"], "clanovi")) echo "class='active'" ?>>
                    <i class="fa fa-users"></i> Clanovi
                </li>
            </a>
            <a href="admin.php?page=dodaj">
                <li <?php if(str_contains($_SERVER["REQUEST_URI"], "dodaj")) echo "class='active'" ?>>
                    <i class="fa fa-user-plus"></i> Nov clan
                </li>
            </a>
            <a href="index">
                <li><i class="fa fa-home"></i> Pocetna</li>
            </a>
            <a href='./includes/functions/logout.inc.php'>
                <li><i class="fa fa-sign-out"></i> Odjavi se</li>
            </a>
        </ul>
        <ul>
            <a href="#"><li>Instagram</li></a>
            <a href="#"><li>Facebook</li></a>
        </ul>
    </div>
</nav>