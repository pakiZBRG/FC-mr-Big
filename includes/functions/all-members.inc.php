<div class='admin-members__info'>
    <p style='width: 5%'>ID</p>
    <p style='width: 20%'>Ime</p>
    <p style='width: 12.5%;  text-align: center'>Od</p>
    <p style='width: 12.5%;  text-align: center'>Do</p>
    <p style='width: 22.5%; text-align: center'>Progres</p>
    <p style='width: 15%; text-align: center'>Status</p>
    <p style='width: 12.5%; text-align: center'>Akcija</p>
</div>

<?php
    include "db.inc.php";

    $month = date('m') + 1;
    $day = date('d');
    $year = date('Y');
    $extend = $year . '-' . $month . '-' . $day;

    // search
    $search = isset($_GET['input']) ? $_GET['input'] : '';

    // pagination
    $page = isset($_GET['pageNum']) && is_numeric($_GET['pageNum']) ? $_GET['pageNum'] : 1;
    $num_results_on_page = 7;
    $total_pages = $conn->query('SELECT * FROM members')->num_rows;
    $calc_page = ($page - 1) * $num_results_on_page;

    if($search) {
        $search = "%$search%";
        $sql = "SELECT * FROM members WHERE name LIKE ? OR id LIKE ? OR surname LIKE ? LIMIT ?, ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "sssii", $search, $search, $search, $calc_page, $num_results_on_page);
    } else {
        $sql = "SELECT * FROM members LIMIT ?, ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ii", $calc_page, $num_results_on_page);
    }

    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    while($row = mysqli_fetch_assoc($result)){
        $id = $row["id"];
        $name = $row["name"];
        $surname = $row['surname'];
        $from = $row["from_date"];
        $to = $row["to_date"];
        $extendFormat = substr(date_format(date_create($extend), DATE_RFC1123), 4, 12);

        if($from >= $to){
            $status = "istekla";
            $datediff = '';
            $today = 0;
        } else {
            $status = "traje";
            $datediff = round((strtotime($to) - strtotime($from)) / (60 * 60 * 24));
            $today = round((strtotime($to) - strtotime(date("Y-m-d"))) / (60 * 60 * 24));
        }

        $fromFormat = substr(date_format(date_create($from), DATE_RFC1123), 4, 12);
        $toFormat = substr(date_format(date_create($to), DATE_RFC1123), 4, 12);
        $progressFill = round((intval($datediff) - $today) / 30 * 100);

        // Status clanarine
        if($today < 0){
            $element = "<div class='isDone expired'>istekla</div>";
        } else {
            $element = "<div class='isDone lasts'>traje</div>";
        }

        // Status progresa
        if ($today < 0){
            $progressElement = "
                <a href='./includes/functions/extend-member.inc.php?id=$id' class='extend' data-link-alt='do $extendFormat'>
                    <span>Produzi</span>
                </a>
            ";
        } else {
            $progressElement = "
                <div class='progress-bar'>
                    <div class='progress-bar__fill' style='width: $progressFill%'>
                    </div>
                </div>
            ";
        }

        echo "
            <div class='admin-members__single'>
                <p style='width: 5%' id='id'>$id</p>
                <p style='width: 20%'>$name $surname</p>
                <p style='width: 12.5%; text-align: center'>$fromFormat</p>
                <p style='width: 12.5%; text-align: center'>$toFormat</p>
                $progressElement
                $element
                <div class='action'>
                    <a class='delete' href='admin.php?page=clanovi&delete=$id'>
                        <i class='fa fa-trash'></i>
                    </a>
                    <button class='edit' onclick='openUpdateModal(this)'>
                        <i class='fa fa-edit'></i>
                        <input type='hidden' name='id' value='$id'/>
                    </button>
                </div>
            </div>
        ";
    }
    
?>