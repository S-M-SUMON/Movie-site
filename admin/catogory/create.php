<?php 
    include "../master_admin/header.php";
    include "../config/config.php";
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<body>

    

    <?php 
        if(isset($_GET['edit_id'])):
            $id = $_GET['edit_id'];
            $selesct = "SELECT * FROM catogory WHERE id='$id'";
            $result = mysqli_query($conn,$selesct);
            $results = mysqli_fetch_assoc($result);
            
    ?>  

    <section class="section_form">
        <div>
            <form action="sotre.php?Edit_id=<?= $results['id']?>" method="POST">
                <label for="">Catogory Name</label><br>
                <input type="text" name="caotgory_name" value="<?= $results['catogory_name'];?>"> <br>
                <button type="submit" name="edit_bnt" class="add_button">Save</button>
            </form>
        </div>
    </section>

    <?php else:?>

    <section class="section_form">
        <div>
            <form action="sotre.php" method="POST">
                <label for="">Catogory Name</label><br>
                <input type="text" name="caotgory_name"> <br>

                <button type="submit" name="save_btn" class="add_button">Save</button>
            </form>
        </div>
    </section>
    <?php endif;?>

    
</body>
</html>