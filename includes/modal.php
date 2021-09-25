<?php

    include './functions/db.inc.php';

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
        <h2>Izmena</h2>
        <button class='close' onclick='closeModal()'>&times;</button>
        <form method='POST'>
            <div class='form_control'>
                <label>Ime</label>
                <input
                    type='name'
                    name='name'
                    value="<?php echo $name; ?>"
                />
            </div>
            <div class='form_control'>
                <label>Prezime</label>
                <input
                    type='surname'
                    name='surname'
                    value="<?php echo $surname; ?>"
                />
            </div>
            <div class='form_control'>
                <label>Od:</label>
                <input
                    type='date'
                    name='from'
                    required
                    value="<?php echo $from; ?>"
                />
                <i class="fa fa-calendar"></i>
            </div>
            <div class='form_control'>
                <label>Do:</label>
                <input
                    type='date'
                    name='to'
                    required
                    value="<?php echo $to; ?>"
                />
                <i class="fa fa-calendar"></i>
            </div>
            <input type='hidden' name='id' value='<?php echo $id; ?>' />
            
            <input type="submit" name='update' value='Azuriraj' class='btn'>
        </form>
    </aside>
</div>