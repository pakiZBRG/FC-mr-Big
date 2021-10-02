<?php

    include 'functions/db.inc.php';

    if(isset($_GET["memberId"])){
        $id = $_GET["memberId"];

        $sql = "SELECT * FROM members WHERE id=?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if($row = mysqli_fetch_assoc($result)){
            $name = $row['name'];
            $surname = $row['surname'];
            $from = $row['from_date'];
            $to = $row['to_date'];
        }
    }
    
?>

<div class="open">
    <section class="overlay"></section>
    <aside class='modal'>
        <button class='close' onclick='closeModal()'>&times;</button>
        <h2>Izmena</h2>
        <div style='margin-top: 1rem' class="center"></div>
        <form method='POST'>
            <div class='form_control'>
                <label>Ime</label>
                <input
                    type='name'
                    id='name'
                    value="<?php echo $name; ?>"
                />
            </div>
            <div class='form_control'>
                <label>Prezime</label>
                <input
                    type='surname'
                    id='surname'
                    value="<?php echo $surname; ?>"
                />
            </div>
            <div class='form_control'>
                <label>Od:</label>
                <input
                    type='date'
                    id='from'
                    required
                    value="<?php echo $from; ?>"
                />
                <i class="fa fa-calendar"></i>
            </div>
            <div class='form_control'>
                <label>Do:</label>
                <input
                    type='date'
                    id='to'
                    required
                    value="<?php echo $to; ?>"
                />
                <i class="fa fa-calendar"></i>
            </div>
            <input type='hidden' id='update' value="<?php echo $id; ?>" />
            
            <button name='submit' class='btn' id='<?php echo $id; ?>' onclick='updateMember(); return false;'>Azuriraj</button>
        </form>
    </aside>
</div>