<div class="range">
    <?php
        if($calc_page + $num_results_on_page > $total_pages) {
            echo "<p class='show'>Prikaz $calc_page - $total_pages</p>";
        } else {
            echo "<p class='show'>Prikaz $calc_page - ".$calc_page+$num_results_on_page."</p>";
        }
    ?>
</div>

<div class="pagination">
    <?php
        $num_pages = ceil($total_pages / $num_results_on_page);

        // First Button - only if the first page is not displayed
        if($current_page > 3) {
            echo "<span class='btn' onclick='displayResults(1)'>First</span>";
        }
        // Prev Button
        if($current_page > 1) {
            $prev = $current_page - 1;
            echo "<span class='btn' onclick='displayResults($prev)'>Prev</span>";
        }
        // 2 pages before current
        for($i = $current_page - 2; $i < $current_page; $i++){
            if($i > 0) {
                echo "<span class='num' onclick='displayResults($i)'>$i</span>";
            }
        }
        // Current page
        echo "<span class='num current' onclick='displayResults($current_page)'>$current_page</span>";
        // 2 pages after current
        for($i = $current_page + 1; $i <= $current_page + 2; $i++){
            if($i <= $num_pages){
                echo "<span class='num' onclick='displayResults($i)'>$i</span>";
            }
        }
        // Next Button
        if($current_page >= 1 && $current_page != $num_pages) {
            $next = $current_page + 1;
            echo "<span class='btn' class='btn' onclick='displayResults($next)'>Next</span>";
        }
        // Last Button - only if the last page is not displayed
        if($current_page < $num_pages - 2){
            echo "<span class='btn' onclick='displayResults($num_pages)'>Last</span>";
        }
    ?>

</div>
