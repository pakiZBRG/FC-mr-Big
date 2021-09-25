<div class="admin-members">
    <?php include 'all-members.inc.php' ?>
</div>

<?php if (ceil($total_pages / $num_results_on_page) > 0): ?>
    <ul class="pagination">
        <?php if ($page > 1): ?>
            <li class="prev"><a href="admin.php?page=clanovi&str=<?php echo $page-1 ?>">Prev</a></li>
        <?php endif; ?>

        <?php if ($page > 3): ?>
            <li class="start"><a href="admin.php?page=clanovi&str=1">1</a></li>
            <li class="dots">...</li>
        <?php endif; ?>

        <?php if ($page-2 > 0): ?>
            <li class="page"><a href="admin.php?page=clanovi&str=<?php echo $page-2 ?>"><?php echo $page-2 ?></a></li>
        <?php endif; ?>
        <?php if ($page-1 > 0): ?>
            <li class="page"><a href="admin.php?page=clanovi&str=<?php echo $page-1 ?>"><?php echo $page-1 ?></a></li>
        <?php endif; ?>

        <li class="currentpage"><a href="admin.php?page=clanovi&str=<?php echo $page ?>"><?php echo $page ?></a></li>
        
        <?php if ($page+1 < ceil($total_pages / $num_results_on_page)+1): ?>
            <li class="page"><a href="admin.php?page=clanovi&str=<?php echo $page+1 ?>"><?php echo $page+1 ?></a></li>
        <?php endif; ?>
        <?php if ($page+2 < ceil($total_pages / $num_results_on_page)+1): ?>
            <li class="page"><a href="admin.php?page=clanovi&str=<?php echo $page+2 ?>"><?php echo $page+2 ?></a></li>
        <?php endif; ?>

        <?php if ($page < ceil($total_pages / $num_results_on_page)-2): ?>
            <li class="dots">...</li>
            <li class="end"><a href="admin.php?page=clanovi&str=<?php echo ceil($total_pages / $num_results_on_page) ?>"><?php echo ceil($total_pages / $num_results_on_page) ?></a></li>
        <?php endif; ?>

        <?php if ($page < ceil($total_pages / $num_results_on_page)): ?>
            <li class="next"><a href="admin.php?page=clanovi&str=<?php echo $page+1 ?>">Next</a></li>
        <?php endif; ?>
    </ul>
<?php endif; ?>