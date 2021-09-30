<?php

    include "db.inc.php";

    // Get pageNum from URL 
    if(isset($_GET["pageNum"])){
        $current_page = $_GET["pageNum"];
    } else {
        $current_page = 1;
    }
    // pagination
    $page = isset($_GET['pageNum']) && is_numeric($_GET['pageNum']) ? $_GET['pageNum'] : 1;
    $num_results_on_page = 10;
    $total_pages = $conn->query('SELECT * FROM members')->num_rows;
    $calc_page = ($page - 1) * $num_results_on_page;

?>
<?php include "delete-member.inc.php" ?>
<?php include "extend-member.inc.php" ?>
<?php include "update-member.inc.php" ?>
<div id="members">
    <div class="admin-members">
        <?php include 'all-members.inc.php' ?>
    </div>
    <?php include 'pagination.inc.php' ?>
</div>
