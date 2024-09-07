<?php 
    require "../config/config.php";
    include "../master_admin/header.php";

    $selesct = "SELECT * FROM catogory";
    $result = mysqli_query($conn,$selesct);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/style.css">

</head>
<body>
    <section class="add_section">
        <div class="add_section_div">
            <div>
                <h1>ALL Catogory</h1>
            </div>

            <?php if(isset($_SESSION['catogory_success'])){?>
            <div class="alart">
                <img src="../../image/config_image/check.png" alt="image">    
                <span><?= $_SESSION['catogory_success']?></span>
            </div>
            <?php  unset($_SESSION['catogory_success']);}?>

            <?php if(isset($_SESSION['catogory_error'])){?>
            <div class="alart">
                <img src="../../image/config_image/check.png" alt="image">    
                <span style="color:red;"><?= $_SESSION['catogory_error']?></span>
            </div>
            <?php } unset($_SESSION['catogory_error'])?>

            <?php if(isset($_SESSION['update_success'])){?>
            <div class="alart">
                <img src="../../image/config_image/check.png" alt="image">    
                <span><?= $_SESSION['update_success']?></span>
            </div>
            <?php } unset($_SESSION['update_success'])?>

            <?php if(isset($_SESSION['update_error'])){?>
            <div class="alart">
                <img src="../../image/config_image/check.png" alt="image">    
                <span style="color:red;"><?= $_SESSION['update_error']?></span>
            </div>
            <?php } unset($_SESSION['update_error'])?>


            <?php if(isset($_SESSION['delete_success'])){?>
            <div class="alart">
                <img src="../../image/config_image/check.png" alt="image">    
                <span><?= $_SESSION['delete_success']?></span>
            </div>
            <?php } unset($_SESSION['delete_success'])?>


            <?php if(isset($_SESSION['delete_error'])){?>
            <div class="alart">
                <img src="../../image/config_image/check.png" alt="image">    
                <span style="color:red;"><?= $_SESSION['delete_error']?></span>
            </div>
            <?php } unset($_SESSION['delete_error'])?>
            
            <div>
                <a href="create.php" class="add_button">ADD</a>
            </div>
        </div>

    </section>
    <section class="catogory_table">
        <div>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Catogory Name</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                <?php 
                    $num = 1;
                    foreach($result as $view):
                ?>
                <tr>
                    <td><?= $num++;?></td>
                    <td><?= $view['catogory_name']?></td>
                    <td>
                        <a href="create.php?edit_id=<?= $view['id']?>" class="edit_btn">Edit</a>
                        <a href="sotre.php?delete_id=<?= $view['id']?>" class="delete_btn">Delete</a>

                    </td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
        </div>
    </section>
</body>
</html>