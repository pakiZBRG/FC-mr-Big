<div class="admin-members">
    <?php include 'all-members.inc.php' ?>
</div>

<div id="posts_content">
    <?php
        //Include pagination class file
        include('Pagination.php');
        
        //Include database configuration file
        include('db.inc.php');
        
        $limit = 3;
        
        //get number of rows
        $queryNum = $conn->query("SELECT COUNT(*) as postNum FROM members");
        $resultNum = $queryNum->fetch_assoc();
        $rowCount = $resultNum['postNum'];
        
        //initialize pagination class
        $pagConfig = array(
            'totalRows' => $rowCount,
            'perPage' => $limit,
            'link_func' => 'searchFilter'
        );
        $pagination =  new Pagination($pagConfig);
        
        //get rows
        $query = $conn->query("SELECT * FROM members ORDER BY id DESC LIMIT $limit");
        
        if($query->num_rows > 0){ 
    ?>
        <div class="posts_list">
    <?php
        while($row = $query->fetch_assoc()){ 
            $postID = $row['id'];
    ?>
        <div class="list_item"><a href="javascript:void(0);"><h2><?php echo $row["name"]; ?></h2></a></div>
    <?php } ?>
        </div>
    <?php echo $pagination->createLinks(); ?>
    <?php } ?>
</div>