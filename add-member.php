<main class='admin'>
    <section class='admin-section'>
        <div class='admin-add'>
            <h1>Dodaj Novog Clana</h1>
            <div class="center" style='margin-bottom: 1rem'>
                <?php include '/includes/functions/add-member.inc.php' ?>
            </div>
            <form method="POST" class='admin-add__form'>
                <div class='form_control'>
                    <label>Ime</label>
                    <input
                        type='name'
                        id='name'
                        value="<?php if(isset($_POST['name']) && !$status) echo $_POST['name']; ?>"
                    />
                </div>
                <div class='form_control'>
                    <label>Prezime</label>
                    <input
                        type='surname'
                        id='surname'
                        value="<?php if(isset($_POST['surname']) && !$status) echo $_POST['surname']; ?>"
                    />
                </div>
                <div class='form_control'>
                    <label>Od:</label>
                    <input
                        type='date'
                        id='from'
                        value="<?php if(isset($_POST['from']) && !$status) { echo $_POST['from']; } else { echo date('Y-m-d'); } ?>"
                        required
                    />
                    <i class="fa fa-calendar"></i>
                </div>
                <div class='form_control'>
                    <label>Do:</label>
                    <input
                        type='date'
                        id='to'
                        value="<?php if(isset($_POST['to']) && !$status) { echo $_POST['to']; } else { echo $to; } ?>"
                        required
                    />
                    <i class="fa fa-calendar"></i>
                </div>
                
                <button name='submit' class='btn' onclick='addMember(); return false;'>Dodaj</button>
            </form>
        </div>  
    </section>
</main>