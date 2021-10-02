<nav class='admin-nav'>
    <div class="admin-nav__width">
        <ul>
            <a href="/admin/clanovi">
                <li <?php if(str_contains($_SERVER["REQUEST_URI"], "clanovi")) echo "class='active'" ?>>
                    <i class="fa fa-users"></i> Clanovi
                </li>
            </a>
            <a href="/admin/dodaj">
                <li <?php if(str_contains($_SERVER["REQUEST_URI"], "dodaj")) echo "class='active'" ?>>
                    <i class="fa fa-user-plus"></i> Nov clan
                </li>
            </a>
            <a href="/">
                <li><i class="fa fa-home"></i> Pocetna</li>
            </a>
            <a href='./functions/logout.inc.php'>
                <li><i class="fa fa-sign-out"></i> Odjavi se</li>
            </a>
        </ul>
        <ul>
            <a href="#"><li>Instagram</li></a>
            <a href="#"><li>Facebook</li></a>
        </ul>
    </div>
</nav>

<!-- Mobile Responsive Navbar -->
<nav class='mobile-nav'>
    <ul>
        <a href="/admin/clanovi">
            <li <?php if(str_contains($_SERVER["REQUEST_URI"], "clanovi")) echo "class='mobile-active'" ?>>
                <i class="fa fa-users"></i><p>Clanovi</p>
            </li>
        </a>
        <a href="/admin/dodaj">
            <li <?php if(str_contains($_SERVER["REQUEST_URI"], "dodaj")) echo "class='mobile-active'" ?>>
                <i class="fa fa-user-plus"></i><p>Nov clan</p>
            </li>
        </a>
        <a href="/">
            <li>
                <i class="fa fa-home"></i><p>Pocetna</p>
            </li>
        </a>
        <a href='./functions/logout.inc.php'>
            <li>
                <i class="fa fa-sign-out"></i><p>Odjavi se</p>
            </li>
        </a>
    </ul>
</nav>