<div class='admin-members__info'>
    <p class='id'>ID</p>
    <p class='name'>Ime</p>
    <p class='from'>Od</p>
    <p class='to'>Do</p>
    <p class='progress'>Progres</p>
    <p class='status'>Status</p>
    <p class='action'>Akcija</p>
</div>

<?php
    include "db.inc.php";

    $month = date('m') + 1;
    $day = date('d');
    $year = date('Y');
    $extend = $year . '-' . $month . '-' . $day;

    // search
    $search = isset($_GET['input']) ? $_GET['input'] : '';

    if($search) {
        $search = "%$search%";
        $sql = "SELECT * FROM members WHERE name LIKE ? OR id LIKE ? OR surname LIKE ? LIMIT ?, ?";

        $total_sql = "SELECT COUNT(*) as results FROM members WHERE name LIKE ? OR id LIKE ? OR surname LIKE ?";
        $total_stmt = mysqli_prepare($conn, $total_sql);
        mysqli_stmt_bind_param($total_stmt, "sss", $search, $search, $search);
        mysqli_stmt_execute($total_stmt);
        $total_result = mysqli_stmt_get_result($total_stmt);
        $total_row = mysqli_fetch_assoc($total_result);
        $total_pages = $total_row['results'];

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
                <a onclick='extendMembership($id)' class='extend' data-link-alt='do $extendFormat'>
                    <span>Produzi</span>
                </a>
            ";
        } else {
            $progressElement = "
                <div class='progress-bar'>
                    <div class='progress-bar__fill' style='width: $progressFill%'></div>
                </div>
            ";
        }

        // koliko dana je ostalo
        if($today < 1) {
            $left = "
                <a class='mobile-status expired' style='cursor: pointer;' onclick='extendMembership($id)'>
                    <span>Produzi</span>
                </a>
            ";
        } else {
            $left = "<p class='mobile-status lasts'>$today dana</p>";
        }

        echo "
            <div>
                <div class='admin-members__single' id='card'>
                    <p class='id' id='id'>$id.</p>
                    <p class='name'>$name $surname</p>
                    <p class='from'>$fromFormat</p>
                    <p class='to'>$toFormat</p>
                    $progressElement
                    $element
                    <div class='action'>
                        <button class='delete' onclick='deleteMember($id)'>
                            <i class='fa fa-trash'></i>
                        </button>
                        <button class='edit' onclick='openUpdateModal(this)'>
                            <i class='fa fa-edit'></i>
                            <input type='hidden' name='id' value='$id'/>
                        </button>
                        <button class='moreInfo' onclick='openMemberInfo($id)'>
                            <i class='fa fa-arrow-down'></i>
                        </button>
                    </div>
                </div>
                <div class='expand $id'>
                    <div><span style='font-size: 0.7rem; color: gray;'>Do:</span> $toFormat</div>
                    <div>$left</div>
                    <div class='action-mobile'>
                        <button class='delete' onclick='deleteMember($id)'>
                            <i class='fa fa-trash'></i>
                        </button>
                        <button class='edit' onclick='openUpdateModal(this)'>
                            <i class='fa fa-edit'></i>
                            <input type='hidden' name='id' value='$id'/>
                        </button>
                    </div>
                </div>
            </div>
        ";
    }
    
?>