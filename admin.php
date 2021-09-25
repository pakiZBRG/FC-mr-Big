<?php include './includes/header.php'?>
<?php 
    if(!isset($_SESSION["email"])) {
        header("Location: /mrbig");
    }
?>

<main class='admin'>
    <?php include './includes/admin-nav.php' ?>

    <?php
        if(isset($_GET["page"])) {
            $page = $_GET["page"];
        } else {
            $page = '';
        }
        
        switch($page) {
            case 'clanovi':
                include "./members.php";
                break;
            case 'dodaj':
                include "./add-member.php";
                break;
            default:
                break;
        }
    ?>
</main>