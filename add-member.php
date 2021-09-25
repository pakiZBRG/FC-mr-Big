<main class='admin'>
    <section class='admin-add'>
        <div style='width: 80%; margin: 2rem auto;'>
            <h1>Dodaj Novog Clana</h1>
            <div class="center" style='margin-bottom: 1rem'>
                <?php include './includes/functions/add-member.inc.php' ?>
            </div>
            <form method="POST" class='admin-add__form'>
                <div class='form_control'>
                    <label>Ime</label>
                    <input
                        type='name'
                        name='name'
                        value="<?php if(isset($_POST['name']) && !$status) echo $_POST['name']; ?>"
                    />
                </div>
                <div class='form_control'>
                    <label>Prezime</label>
                    <input
                        type='surname'
                        name='surname'
                        value="<?php if(isset($_POST['surname']) && !$status) echo $_POST['surname']; ?>"
                    />
                </div>
                <div class='form_control'>
                    <label>Od:</label>
                    <input
                        type='date'
                        name='from'
                        value="<?php if(isset($_POST['from']) && !$status) { echo $_POST['from']; } else { echo date('Y-m-d'); } ?>"
                        required
                    />
                    <i class="fa fa-calendar"></i>
                </div>
                <div class='form_control'>
                    <label>Do:</label>
                    <input
                        type='date'
                        name='to'
                        value="<?php if(isset($_POST['to']) && !$status) { echo $_POST['to']; } else { echo $to; } ?>"
                        required
                    />
                    <i class="fa fa-calendar"></i>
                </div>
                
                <input type="submit" name='create' value='Dodaj' class='btn'>
            </form>
        </div>  
    </section>
</main>