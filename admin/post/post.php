<?php 
    include "../master_admin/header.php";
    include "../config/config.php";
    $selesct = "SELECT * FROM post";
    $result = mysqli_query($conn,$selesct);   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/style.css">
    <!-- <link rel="stylesheet" href="./css/bootstrap.min.css"> -->
</head>
<body>
<section class="add_section">
    <div class="add_section_div">
        <div>
            <h1>ALL Post</h1>
        </div>
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
                    <th>Title</th>
                    <th>Image</th>

                </tr>
            </thead>
            <tbody>
                <?php 
                    $num = 1;
                    foreach ($result as $view): {
                        
                    }
                ?>
                <tr>
                    <td><?= $num ++;?></td>
                    <td style="width:500px; text-align:start;"><?= $view['title']?></td>
                    <td><img src="../../image/uploadImage/<?= $view['baner_image']?>" alt="image" width="100px" height="100px"></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
        </div>
    </section>



    
</body>
</html>