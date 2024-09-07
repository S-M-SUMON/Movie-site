
<?php
    include "./master/header.php";
    $id = $_GET['id'];
    $selesct = "SELECT * FROM post WHERE id='$id'";
    $result = mysqli_query($conn,$selesct);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <!-- <link rel="stylesheet" href="./css/bootstrap.min.css"> -->
</head>
<body>



    <section class="view_body">
        <?php 
                foreach($result as $view):
        ?>
        <div>
            <h1><?= $view['title']?></h1>
        </div>
        <div>
            <img src="./image/uploadImage/<?= $view['baner_image']?>" alt="" class="thamble_image">
        </div>
        <div>
            <?php 
                $explode = explode(',',$view['subtitle']);
                foreach($explode as $subtitle):
            ?>
            <p><?= $subtitle;?></p>
            
            <?php endforeach;?>
        </div>

        <div>
            <?php 
                $explode = explode(',',$view['view_image']);
                foreach($explode as $view_image):
                    if(!$view_image == ","){

                    }else{

                    
            ?>
            <img src="./image/uploadImage/<?= $view_image?>" alt="" class="screenshort">
            <?php } endforeach;?>
            
        </div>

        <div>
            <h1> || Full Movie Download  ||</h1>
            <a href="<?= $view['download_link']?>">Download</a>
        </div>
    
    <?php endforeach;?>
    </section>


    
</body>
</html>

<?php
    include "./master/footer.php";
?>